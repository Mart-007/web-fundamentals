<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{
public function __construct() {
	parent::__construct();
	$this->load->model('User_model');
}

public function index() {
	
	$data = array(
		"customers" => $this->User_model->all()
	);
	
	$this->load->view('welcome_message' ,$data);
	}
}