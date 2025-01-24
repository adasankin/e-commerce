<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            $headers = $this->input->request_headers();
            if (isset($headers['HX-Request'])) {
                header("HX-Location: " . base_url('login'));
                exit;
            } else {
                redirect(base_url('login'));
            }
        }
    }

    public function index()
    {
        $this->db->select('products.*, carts.qty, brands.name as brand');
        $this->db->join('products', 'products.id = carts.product_id');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $this->db->where('carts.user_id', $this->user->me()->id);
        $data['carts'] = $this->db->get('carts')->result();

        $data['total'] = 0;
        foreach ($data['carts'] as $p) {
            $data['total'] += ($p->price - ($p->price * $p->discount_percent / 100)) * $p->qty;
        }

        $this->load->view('templates/header');
        $this->load->view('cart', $data);
        $this->load->view('templates/subscription');
        $this->load->view('templates/footer');
    }

    public function addtocart($id)
    {
        if ($this->input->post('qty') > 0) {
            $data = [
                'user_id' => $this->user->me()->id,
                'product_id' => $id,
                'qty' => $this->input->post('qty')
            ];

            $this->db->where('user_id', $data['user_id']);
            $this->db->where('product_id', $data['product_id']);
            $cart = $this->db->get('carts')->row();

            if ($cart) {
                $this->db->where('id', $cart->id);
                $this->db->update('carts', $data);
                header('HX-Trigger: cart-updated');
            } else {
                $this->db->insert('carts', $data);
                header('HX-Trigger: cart-added');
            }
            exit;
        }
        show_404();
    }

    public function cartupdate($id)
    {
        if ($this->input->post('qty') > 0) {
            $data = [
                'user_id' => $this->user->me()->id,
                'product_id' => $id,
                'qty' => $this->input->post('qty')
            ];

            $this->db->where('user_id', $data['user_id']);
            $this->db->where('product_id', $data['product_id']);
            $cart = $this->db->get('carts')->row();

            if ($cart) {
                $this->db->where('id', $cart->id);
                $this->db->update('carts', $data);
                header('HX-Trigger: cart-updated');
                exit;
            }
        }
        show_404();
    }

    public function cartremove($id)
    {
        $this->db->where('user_id', $this->user->me()->id);
        $this->db->where('product_id', $id);
        $this->db->delete('carts');
        header('HX-Trigger: cart-removed');
        exit;
    }

    public function reset()
    {
        $this->db->where('user_id', $this->user->me()->id);
        $this->db->delete('carts');
        redirect('cart');
    }

    public function checkout()
    {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-WoDAk0D6ZVdjxpkY10eT-7BW';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => $this->user->me()->f_name,
                'last_name' => $this->user->me()->l_name,
                'email' => $this->user->me()->email
            ),
        );

        $this->db->select('products.*, categories.name as category_name, carts.qty');
        $this->db->join('products', 'products.id = carts.product_id');
        $this->db->join('categories', 'products.category_id = categories.id');
        $this->db->where('carts.user_id', $this->user->me()->id);
        $carts = $this->db->get('carts')->result();

        foreach ($carts as $cart) {
            $params['item_details'][] = [
                "id" => $cart->id,
                "price" => $cart->price - ($cart->price * $cart->discount_percent / 100),
                "quantity" => $cart->qty,
                "name" => $cart->name,
                "category" => $cart->category_name,
                "merchant_name" => "Fancy Nancy",
            ];
        }

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $ret = [
            'checkout' => $snapToken
        ];

        header('HX-Trigger: ' . json_encode($ret));
    }

    public function transaction($order_id)
    {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-WoDAk0D6ZVdjxpkY10eT-7BW';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;


        if (isset($_POST['product_ids'])) {
            $product_ids = $this->input->post('product_ids');
            $ratings = $this->input->post('ratings');
            $reviews = $this->input->post('reviews');

            $config['upload_path'] = './assets/img/reviews/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 2048 * 5;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            foreach ($product_ids as $key => $product_id) {
                $data = [
                    'user_id' => $this->user->me()->id,
                    'product_id' => $product_id,
                    'rating' => $ratings[$key],
                    'review' => $reviews[$key],
                    'submit_date' => date('Y-m-d H:i:s')
                ];

                if ($_FILES['images']['name'][$key] != '') {
                    $_FILES['image']['name'] = $_FILES['images']['name'][$key];
                    $_FILES['image']['type'] = $_FILES['images']['type'][$key];
                    $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$key];
                    $_FILES['image']['error'] = $_FILES['images']['error'][$key];
                    $_FILES['image']['size'] = $_FILES['images']['size'][$key];

                    if ($this->upload->do_upload('image')) {
                        $data['image'] = $this->upload->data('file_name');
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect(base_url('cart'));
                    }
                }

                $this->db->insert('reviews', $data);
            }

            $this->db->select('product_id, qty');
            $cart_products = $this->db->get_where('carts', ['user_id' => $this->user->me()->id])->result();
            foreach ($cart_products as $cart_product) {
                $this->db->set('stock', 'stock - ' . $cart_product->qty, false);
                $this->db->where('id', $cart_product->product_id);
                $this->db->update('products');
            }

            $this->db->where('user_id', $this->user->me()->id);
            $this->db->delete('carts');

            $this->session->set_flashdata('success', 'Your review has been submitted');
            redirect(base_url());
            exit;
        }

        $status = \Midtrans\Transaction::status($order_id);

        if (is_object($status)) {
            if ($status->transaction_status == 'settlement') {
                $this->db->select('products.*, carts.qty');
                $this->db->join('products', 'products.id = carts.product_id');
                $this->db->where('carts.user_id', $this->user->me()->id);

                $carts = $this->db->get('carts')->result();
                foreach ($carts as $cart) {
                    $data = [
                        'user_id' => $this->user->me()->id,
                        'product_id' => $cart->id,
                        'qty' => $cart->qty,
                        'price' => $cart->price - ($cart->price * $cart->discount_percent / 100),
                        'total' => ($cart->price - ($cart->price * $cart->discount_percent / 100)) * $cart->qty,
                        'paid_date' => date('Y-m-d H:i:s')
                    ];
                    $this->db->insert('transactions', $data);
                }
                $view_data['carts'] = $carts;

                $this->session->set_flashdata('success', 'Your transaction has been completed');

                $this->load->view('templates/header');
                $this->load->view('reviews', $view_data);
                $this->load->view('templates/subscription');
                $this->load->view('templates/footer');
            } else {
                $this->session->set_flashdata('error', 'Your transaction has been failed');
                redirect('cart');
            }
        } else {
            $this->session->set_flashdata('error', 'Your transaction has been failed');
            redirect('cart');
        }
    }
}
