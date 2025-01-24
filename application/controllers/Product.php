<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function single($id)
    {
        $this->db->select('products.*, categories.name as category_name, brands.name as brand');
        $this->db->join('categories', 'categories.id = products.category_id');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $data['product'] = $this->db->get_where('products', ['products.id' => $id])->row();

        if (is_login()) {
            $this->db->where('user_id', $this->user->me()->id);
            $this->db->where('product_id', $id);
            $cart = $this->db->get('carts')->row();
            $data['cart_qty'] = $cart->qty ?? 0;
        } else {
            $data['cart_qty'] = 0;
        }

        $this->db->select('reviews.*, users.f_name, users.l_name, users.email');
        $this->db->join('users', 'users.id = reviews.user_id');
        $this->db->where('product_id', $id);
        $data['reviews'] = $this->db->get('reviews')->result();

        $this->db->select('AVG(rating) as avg');
        $this->db->where('product_id', $id);
        $data['avg_rating'] = $this->db->get('reviews')->row()->avg;

        $this->db->select('products.*, brands.name as brand, AVG(reviews.rating) as avg_rating');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $this->db->join('reviews', 'reviews.product_id = products.id', 'left');
        $this->db->where('category_id', $data['product']->category_id);
        $this->db->where('products.id !=', $id);
        $this->db->limit(5);
        $this->db->group_by('products.id');
        $this->db->order_by('products.id', 'RANDOM');
        $data['related_products'] = $this->db->get('products')->result();

        $this->load->view('templates/header');
        $this->load->view('product/single', $data);
        $this->load->view('templates/subscription');
        $this->load->view('templates/footer');
    }


    public function page($page = 1)
    {
        $this->db->select('products.*, brands.name as brand, AVG(reviews.rating) as avg_rating');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $this->db->join('reviews', 'reviews.product_id = products.id', 'left');
        $this->db->group_by('products.id');
        $this->db->order_by('products.id', 'desc');
        $this->db->limit(15, ($page - 1) * 15);
        $data['products'] = $this->db->get('products')->result();
        $data['categories'] = $this->db->get('categories')->result();

        $data['pages'] = [
            'current' => $page,
            'type' => 'all',
            'total' => ceil($this->db->count_all('products') / 15)
        ];

        $this->load->view('templates/header');
        $this->load->view('product/all', $data);
        $this->load->view('templates/subscription');
        $this->load->view('templates/footer');
    }

    public function category($id, $page = 1)
    {
        $this->db->select('products.*, brands.name as brand, AVG(reviews.rating) as avg_rating');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $this->db->join('reviews', 'reviews.product_id = products.id', 'left');
        $this->db->where('category_id', $id);
        $this->db->group_by('products.id');
        $this->db->order_by('id', 'desc');
        $this->db->limit(15, ($page - 1) * 15);
        $data['products'] = $this->db->get('products')->result();
        $data['categories'] = $this->db->get('categories')->result();
        $data['pages'] = [
            'current' => $page,
            'type' => 'category',
            'total' => ceil($this->db->where('category_id', $id)->count_all_results('products') / 15)
        ];

        $this->load->view('templates/header');
        $this->load->view('product/all', $data);
        $this->load->view('templates/subscription');
        $this->load->view('templates/footer');
    }
}
