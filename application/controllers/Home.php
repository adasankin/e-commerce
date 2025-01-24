<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('products.*, brands.name as brand, AVG(reviews.rating) as avg_rating');
        $this->db->join('brands', 'brands.id = products.brand_id');
        $this->db->join('reviews', 'reviews.product_id = products.id', 'left');
        $this->db->group_by('products.id');
        $this->db->order_by('avg_rating', 'desc');
        $this->db->limit(10);
        $data['products'] = $this->db->get('products')->result();

        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/subscription');
        $this->load->view('templates/footer');
    }
}
