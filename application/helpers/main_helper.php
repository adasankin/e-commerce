<?php

function assetsPath($path = '')
{
    return base_url('assets/' . $path);
}

function is_login()
{
    $ci = &get_instance();
    if ($ci->session->userdata('user')) {
        return true;
    }
    return false;
}

function is_user()
{
    $ci = &get_instance();
    if ($ci->session->userdata('user')) {
        if ($ci->session->userdata('user')->role == 'user') {
            return true;
        }
    }
    return false;
}

function is_admin()
{
    $ci = &get_instance();
    if ($ci->session->userdata('user')) {
        if ($ci->session->userdata('user')->role == 'admin') {
            return true;
        }
    }
    return false;
}
