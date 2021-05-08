<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User extends CI_Model{ 
    public function get_users()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM all_users LIMIT 5");
        return $query->result_array();
    }

    public function load_more(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM all_users");
        return $query->result_array();
    }
}
?>


