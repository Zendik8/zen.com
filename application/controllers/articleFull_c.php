<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleFull_c extends CI_Controller
{
    public function ArticleFull($id)
    {
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->model('articles_m');
        $getArticlesId = $this->articles_m->get_articles_id($id);
        $this->load->view('articleFull_v', $getArticlesId);
        $this->load->view('footer_v');
    }

}

