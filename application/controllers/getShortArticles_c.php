<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetShortArticles_c extends CI_Controller
{
    public function index()
    {
        $this->load->model('articles_m');

        $config['base_url'] = base_url().'GetShortArticles_c/index';
        $config['total_rows'] = $this->db->count_all('blog');
        $config['per_page'] = 2;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'Перша';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Остання';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['articles'] = $this->articles_m->get_articles($config['per_page'],
            $this->uri->segment(3));

        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('articlesShort_v', $data);
        $this->load->view('footer_v');
    }
}

