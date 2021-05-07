<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Model {
    function get_countries()
    {
        $query = "SELECT * FROM countries";
        return $this->db->query($query)->result_array();
    }
}
