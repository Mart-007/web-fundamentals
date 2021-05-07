<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('country');
    }
    public function index(){
        
        $gender = array($this->input->post('gender[0]', TRUE), 
                         $this->input->post('gender[1]', TRUE));
        $country = $this->input->post('country', TRUE); 
        $users = $this->user->get_users($gender, $country);
        $countries = $this->country->get_countries();
        $this->load->view('users/index', array_merge($users, array('countries' => $countries)));


        // $users = $this->user->get_users();
// 		$countries = $this->country->get_countries();
// 		$this->load->view('users/index',  array_merge($users, array('countries' => $countries)));
//     }


//   public function filter(){
//         $gender = array($this->input->post('gender[0]', TRUE), 
//                          $this->input->post('gender[1]', TRUE));
//         $country = $this->input->post('country', TRUE); 

//         $result = $this->user->get_users($gender, $country);
//         $this->load->view('initial/data', array("users" => $result['users']));
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('user');
    // }
	// public function index()
	// {
    //     //call model
    //     $users = array('users' => $this->user->get_users());
    //     $this->load->view('users/index', $users);
	// }
    // public function add_users(){
    //     $users = array('users' => $this->user->load_more());
    //     $this->load->view('users/index', $users);
    // 
}
?>