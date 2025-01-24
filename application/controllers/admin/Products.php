<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login() && !is_admin()) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $this->db->select('products.*, categories.name as category_name, brands.name as brand');
        $this->db->join('categories', 'categories.id = products.category_id');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $data['data'] = $this->db->get('products')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/products/data', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './assets/img/products/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2048 * 10;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $data = $this->input->post();
                $data['image'] = $this->upload->data('file_name');
                $this->db->insert('products', $data);
                $this->session->set_flashdata('success', 'Produk telah ditambahkan!');
                redirect(base_url('admin/products'));
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('admin/products/add'));
            }
        } else {
            $data['category'] = $this->db->get('categories')->result();
            $data['brand'] = $this->db->get('brands')->result();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/products/add', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/img/products/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048 * 10;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->db->get_where('products', ['id' => $id])->row()->image;
                    if ($old_image != '') {
                        unlink(FCPATH . 'assets/img/products/' . $old_image);
                    }

                    $data = $this->input->post();
                    $data['image'] = $this->upload->data('file_name');
                    $this->db->where('id', $id);
                    $this->db->update('products', $data);
                    $this->session->set_flashdata('success', 'Produk telah diubah!');
                    redirect(base_url('admin/products'));
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(base_url('admin/products/edit/' . $id));
                }
            } else {
                $data = $this->input->post();
                $this->db->where('id', $id);
                $this->db->update('products', $data);
                $this->session->set_flashdata('success', 'Produk telah diubah!');
                redirect(base_url('admin/products'));
            }
        } else {
            $this->db->select('products.*, categories.id as category_id');
            $this->db->join('categories', 'categories.id = products.category_id');
            $data['data'] = $this->db->get_where('products', ['products.id' => $id])->row();
            $data['category'] = $this->db->get('categories')->result();
            $data['brand'] = $this->db->get('brands')->result();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/products/edit', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
        $this->session->set_flashdata('success', 'Produk telah dihapus!');
        redirect(base_url('admin/products'));
    }
}
