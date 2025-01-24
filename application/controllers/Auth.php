<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        if (is_login()) {
            redirect(base_url());
        }
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|regex_match[/[A-Z]/]|regex_match[/[a-z]/]|regex_match[/[0-9]/]');
        if ($this->form_validation->run()) {
            $data = $this->input->post();
            $data['password'] = md5($data['password']);
            $this->user->create($data);
            $this->session->set_flashdata('success', 'Your account has been created');
            redirect(base_url('login'));
        } else {
            $this->load->view('templates/header');
            $this->load->view('register');
            $this->load->view('templates/subscription');
            $this->load->view('templates/footer');
        }
    }

    public function login()
    {
        if (is_login()) {
            redirect(base_url());
        }
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('users', ['email' => $email])->row_array();
            if ($user) {
                if ($user['password'] == md5($password)) {
                    $user = (object) $user;
                    $this->session->set_userdata('user', $user);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('error', 'Invalid email or password');
                    redirect(base_url('login'));
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('login');
            $this->load->view('templates/subscription');
            $this->load->view('templates/footer');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('success', 'You have been logged out');
        redirect(base_url('login'));
    }
}
