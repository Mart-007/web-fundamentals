<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class users extends CI_Model{ 
   function __construct()
   {
       parent::__construct();
   }
   public function select()
   {
        // $offset = 5*$page;
        // $limit = 10;
        // $sql = "SELECT * FROM users.all_users limit $offset, $limit";
        $query = $this->db->get('users.all_users');
        return $query;     
   }
}


