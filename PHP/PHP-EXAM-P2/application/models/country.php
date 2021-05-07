<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

Class Country extends CI_Model{
    public function get_countries(){
        $query = "SELECT * FROM countries";
        return $this->db->query($query)->result_array();
    }
}
?>