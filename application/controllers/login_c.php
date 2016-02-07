<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller
{
    public function index()
    {
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('login_v');
        $this->load->view('footer_v');
    }

    public function login()
    {
        $data['first_name'] = $this->input->post('first_name');
        $data['password'] = $this->input->post('password');

        $session_login = array(
            'session_id'    => session_id(),
            'first_name'     => $data['first_name'],
            'logged_in' => TRUE
        );

        $this->session->set_userdata($session_login);
        $this->load->view('header_v', $data);

        redirect('/');
    }
    public function logout()
    {
        $session_logout = array('first_name','logged_in','session_id');

        $this->session->unset_userdata($session_logout);
        redirect('/');
    }

}