<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'blog_title'
        );

        $this->load->view('head_view', $data);
        $this->load->view('header_view');
        $this->load->view('article_view');
        $this->load->view('footer_view');

    }
}
