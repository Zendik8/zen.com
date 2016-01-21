<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class deleteArticle_c extends CI_Controller
{
    public function deleteArticle($id)
    {
        $this->load->model('articles_m'); //Загрузили модель articles_m
        $this->articles_m->deleteArticle($id);/* ЗАпускаємо ф-цію addArticle з файлу
        articles_m.php  та передаємо параметр $data (масив з даними) */
        redirect('/getArticles_c/');
    }

}
