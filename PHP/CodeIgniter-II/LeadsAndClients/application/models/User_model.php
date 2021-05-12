<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model{
    function all(){
        $this->load->database();
        $query = $this->db->query('SELECT * FROM leads.lead');
        return $query->result_array();
    }
}