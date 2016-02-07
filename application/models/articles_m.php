<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_m extends CI_Model
{
    function get_articles($num, $segment)
    {
        $query = $this->db->get('blog', $num, $segment);
        return $query->result_array();
    }

    function get_articles_id($id)
    {
        $query = $this->db->get_where('blog', array('id' => $id));
        $queryId = $query->result_array();
        return $queryId['0'];
    }
    function addArticle($data)
    {
        $this->db->insert('blog', $data);
    }
    function editArticle($getArticlesId)
    {
        $id = $getArticlesId['id'];
        $where = "id = $id";
        $this->db->update('blog', $getArticlesId, $where);

    }
    function deleteArticle($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }
}
