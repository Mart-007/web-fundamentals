<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class GetUsers extends CI_Controller { 

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
    }
    
    public function index(){
        $this->load->database();
        $this->load->model('users');
        $data['data'] = $this->users->select();
        $this->load->view('exam/users', $data);
    }

    public function get_country(){
        //post data
        $postData = $this->input->post();
        //load model
        $this->load->model('users');
        //get data
        $data = $this->users->get_country($postData);
        echo json_encode($data);
    }

    // public function getUsers(){

    //     $page =  $_GET['page'];
    //     $this->load->model('users');
    //     $Users = $this->users->getUsers($page);
    //     foreach($Users as $User){
    //     echo "<tr><td>".$User->id."</td>
    //     <td>".$User->country_name."</td>
    //     <td>".$User->country_code."</td></tr>";
    // }
    // exit;
    // }

}