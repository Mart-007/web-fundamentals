<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class users extends CI_Model{ 
   function __construct()
   {
       parent::__construct();
   }
   public function select()
   {
        $query = $this->db->get('all_users');
        return $query;     
   }
}


