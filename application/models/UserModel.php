<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function create($data)
    {
        $data = [
            'f_name' => $data['first_name'],
            'l_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'user'
        ];
        $this->db->insert('users', $data);
    }

    public function me()
    {
        if (!$this->session->userdata('user')) {
            return null;
        } else {
            return $this->session->userdata('user');
        }
    }

    public function all()
    {
        return $this->db->get('users')->result();
    }
}
