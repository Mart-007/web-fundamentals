<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User extends CI_Model{ 
    public function get_users($gender, $country)
    {   
        // $query = "SELECT * FROM all_users
        //           INNER JOIN countries ON all_users.country_id = countries.id";
        
        // $result = $this->db->query($query)->result_array();
        // return array('users' => $result, 'count' => sizeof($result));

        
      if($gender[0] == null){
            $genders = "M', 'F";
        } else{
            $genders = implode("','", array_filter($gender));
        }
        
        $query = "SELECT * FROM all_users INNER JOIN countries ON all_users.country_id = countries.id WHERE gender IN ('$genders')";
        if($country != 0){
            $query .= "AND country_id = ". $country;
        }
        $query .= "ORDER BY first_name";
        $result = $this->db->query($query)->result_array();
        return array('users' => $result, 'count' => sizeof($result));
        var_dump($result);
        // $this->load->database();
        // $query = $this->db->query("SELECT * FROM all_users LIMIT 5");
        // return $query->result_array();
  
    }
}

    //   if($gender[0] == null){
    //         $genders = "M', 'F";
    //     } else{
    //         $genders = implode("','", array_filter($gender));
    //     }
    //     $query = "SELECT * FROM all_users INNER JOIN countries ON all_users.country_id = countries.id WHERE gender IN ('$genders')";
    //     if($country != 0){
    //         $query .= "AND country_id = ". $country;
    //     }
    //     $query .= " ORDER BY first_name";
    //     $result = $this->db->query($query)->result_array();
    //     return array('users' => $result, 'count' => sizeof($result));
        
    //     $this->load->database();
    //     $query = $this->db->query("SELECT * FROM all_users LIMIT 5");
    //     return $query->result_array();
    // }

    // public function load_more(){
    //     $this->load->database();
    //     $query = $this->db->query("SELECT * FROM all_users");
    //     return $query->result_array();
?>