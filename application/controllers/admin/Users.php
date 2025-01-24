<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
        $this->db->where('id !=', $this->user->me()->id);
        $data['data'] = $this->user->all();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/users/data', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['password'] = md5($data['password']);
            $this->user->create($data);
            $this->session->set_flashdata('success', 'User telah ditambahkan!');
            redirect(base_url('admin/users'));
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/users/add');
            $this->load->view('admin/templates/footer');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($data['password'] != '') {
                $data['password'] = md5($data['password']);
            } else {
                unset($data['password']);
            }
            $data['f_name'] = $data['first_name'];
            $data['l_name'] = $data['last_name'];
            unset($data['first_name']);
            unset($data['last_name']);
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            $this->session->set_flashdata('success', 'User telah diubah!');
            redirect(base_url('admin/users'));
        } else {
            $data['data'] = $this->db->get_where('users', ['id' => $id])->row();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/users/edit', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->session->set_flashdata('success', 'User telah dihapus!');
        redirect(base_url('admin/users'));
    }
}
