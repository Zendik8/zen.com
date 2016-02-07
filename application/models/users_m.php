<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends CI_Model
{
    function get_user()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }
    function addUser($data)
    {
        $this->db->insert('users', $data);
    }
}
