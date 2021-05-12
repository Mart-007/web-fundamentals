<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model{
    function __construct(){

    }

    function show_cart(){
        $result=$this->db->get('email_db');
        return $result;
    }
}

?>