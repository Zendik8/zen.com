<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditArticle_c extends CI_Controller
{
    public function index()
    {
/*

        $this->load->model('articles_m');
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('editArticle_v');
        $this->load->view('footer_v');
*/

       // $data['articles'] = $this->articles_m->get_articles();
    }

    public function editArticle()
    {
        $this->load->model('articles_m');
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('editArticle_v');
        $this->load->view('footer_v');

        $data['id'] = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $data['date'] = date('Y-m-d');
        $this->load->model('articles_m'); //Загрузили модель articles_m

        if(isset($_POST['edit'])) {
            $this->articles_m->editArticle($data);/* ЗАпускаємо ф-цію addArticle з файлу
        articles_m.php  та передаємо параметр $data (масив з даними) */
        }
    }

}

