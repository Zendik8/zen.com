<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_c extends CI_Controller
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
    /*public function addArticle()
    {
        $data['title'] = $this->input->post('title');
        $data['content'] = "Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type";
        $data['date'] = "2016-01-07";
        $this->load->model('articles_m'); //Загрузили модель articles_m
        $this->articles_m->addArticle($data);/* ЗАпускаємо ф-цію addArticle з файлу
        articles_m.php  та передаємо параметр $data (масив з даними) */
   // }



}

