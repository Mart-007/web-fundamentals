<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    function get_users()
    {
        $query = "SELECT * FROM users
                  INNER JOIN countries ON users.country_id = countries.id";
        
        $result = $this->db->query($query)->result_array();
        return array('users' => $result, 'count' => sizeof($result));
    }


    // function get_users($gender, $country)
    // {
    //     //check gender
    //     if($gender[0] == NULL){
    //         $genders = "M','F";
    //     } else{
    //         $genders = implode("','", array_filter($gender));
    //     }
    //     //make query
    //     $query = "SELECT * FROM users
    //               INNER JOIN countries ON users.country_id = countries.id
    //               WHERE gender IN ('$genders')";
    //     //check country                  
    //     if($country != 0){
    //         $query .= " AND country_id = " . $country;
    //     }
    //     //order
    //     $query .= " ORDER BY first_name";
        
    //     //execute
    //     $result = $this->db->query($query)->result_array();
    //     return array('users' => $result,
    //                  'count' => sizeof($result));
    // }
}
