<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_m extends CI_Model
{
    /*
    var $id = '';
    var $title = '';
    var $text = '';
    var $date = '';
    */

    function get_articles()
    {
        $query = $this->db->get('blog');
        //Записуємо у змінну $query всі дані що знаходяться в таблиці 'blog'
        return $query->result_array();
        // Повертаємо змінну $query у вигляді масива result_array
    }


}
