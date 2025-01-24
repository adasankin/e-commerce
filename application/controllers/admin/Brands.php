<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brands extends CI_Controller
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
        $data['data'] = $this->db->get('brands')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/brands/data', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->db->insert('brands', $data);
            $this->session->set_flashdata('success', 'Brand telah ditambahkan!');
            redirect(base_url('admin/brands'));
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/brands/add');
            $this->load->view('admin/templates/footer');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->db->where('id', $id);
            $this->db->update('brands', $data);
            $this->session->set_flashdata('success', 'Brand telah diubah!');
            redirect(base_url('admin/brands'));
        } else {
            $data['data'] = $this->db->get_where('brands', ['id' => $id])->row();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/brands/edit', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('brands');
        $this->session->set_flashdata('success', 'Brand telah dihapus!');
        redirect(base_url('admin/brands'));
    }
}
