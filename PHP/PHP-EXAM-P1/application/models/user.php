<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User extends CI_Model{ 
    public function get_users()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM all_users LIMIT 5");
        return $query->result_array();
        
        // $query = "SELECT * FROM all_users
        //           INNER JOIN countries ON all_users.country_id = countries.id";
        
        // $result = $this->db->query($query)->result_array();
        // return array('all_users' => $result, 'count' => sizeof($result));
    }

    public function load_more(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM all_users");
        return $query->result_array();
    }
}
?>


