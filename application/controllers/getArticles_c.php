<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetArticles_c extends CI_Controller
{
    public function index()
    {
        $this->load->model('articles_m');
        $data['articles'] = $this->articles_m->get_articles();
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('articles_v', $data);
        $this->load->view('footer_v');
    }
}

