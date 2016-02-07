<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditArticle_c extends CI_Controller
{
    public function editArticle($id)
    {
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->model('articles_m');
        $getArticlesId = $this->articles_m->get_articles_id($id);
        $this->load->view('editArticle_v', $getArticlesId);
        if(isset($_POST['edit'])) {
            $data['id'] = $getArticlesId['id'];
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['date'] = $this->input->post('date');
            $this->articles_m->editArticle($data);
            redirect('getShortArticles_c');
        }
        $this->load->view('footer_v');
    }

}

