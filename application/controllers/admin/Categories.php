<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
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
        $data['data'] = $this->db->get('categories')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/categories/data', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->db->insert('categories', $data);
            $this->session->set_flashdata('success', 'Kategori telah ditambahkan!');
            redirect(base_url('admin/categories'));
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/categories/add');
            $this->load->view('admin/templates/footer');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->db->where('id', $id);
            $this->db->update('categories', $data);
            $this->session->set_flashdata('success', 'Kategori telah diubah!');
            redirect(base_url('admin/categories'));
        } else {
            $data['data'] = $this->db->get_where('categories', ['id' => $id])->row();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/categories/edit', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('categories');
        $this->session->set_flashdata('success', 'Kategori telah dihapus!');
        redirect(base_url('admin/categories'));
    }
}
