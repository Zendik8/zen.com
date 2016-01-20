<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_m extends CI_Model
{
    function get_articles()
    {
        $query = $this->db->get('blog');
        //Записуємо у змінну $query всі дані що знаходяться в таблиці 'blog'
        return $query->result_array();
        // Повертаємо змінну $query у вигляді масива result_array
    }
    function addArticle($data)
    {
        $this->db->insert('blog', $data);
    }
    function editArticle($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('blog', $data);
    }
    function deleteArticle($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
    }

}
