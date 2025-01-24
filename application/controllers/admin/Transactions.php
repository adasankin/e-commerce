<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transactions extends CI_Controller
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
        $this->db->select('transactions.*, users.f_name, users.l_name, products.name as product_name');
        $this->db->join('users', 'users.id = transactions.user_id');
        $this->db->join('products', 'products.id = transactions.product_id');
        $this->db->order_by('paid_date', 'desc');
        $data['data'] = $this->db->get('transactions')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/transactions/data', $data);
        $this->load->view('admin/templates/footer');
    }
}
