<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!is_login() && !is_admin()){
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }
}
