<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'main_title'
        );

        $this->load->view('head_v', $data);
        $this->load->view('header_v');
        $this->load->view('main');
        $this->load->view('footer_v');
    }
}
