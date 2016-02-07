<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_c extends CI_Controller
{
    public function index()
    {
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('registration_v');
        $this->load->view('footer_v');
    }

    public function registration()
    {
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['email'] = $this->input->post('email');

        $data['password'] = $this->input->post('password');
        $password_confirmation = $this->input->post('password_confirmation');

        if($data['password'] == $password_confirmation){
            $data['password'] = $this->input->post('password');
        }
        else{
            echo 'error pass';
        }



        if(isset($_POST['registr'])){
            $this->load->model('users_m');
            $this->users_m->addUser($data);
            redirect('/');
        }
    }

}