<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addArticles_c extends CI_Controller
{
    public function index()
    {


        $this->load->model('articles_m');
        $this->load->view('head_v');
        $this->load->view('header_v');
        $this->load->view('addArticle_v');
        $this->load->view('footer_v');
    }

    public function addArticle()
    {
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $data['date'] = date('Y-m-d');
        $this->load->model('articles_m'); //Загрузили модель articles_m
        $this->articles_m->addArticle($data);/* ЗАпускаємо ф-цію addArticle з файлу
        articles_m.php  та передаємо параметр $data (масив з даними) */
        if(isset($_POST['add']) == TRUE){
            redirect('/articles_c/');
        }
    }

}

