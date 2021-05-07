<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }
	public function index()
	{
        //call model
        $users = array('users' => $this->user->get_users());
        $this->load->view('users/index', $users);
	}
    public function add_users(){
        $users = array('users' => $this->user->load_more());
        $this->load->view('users/index', $users);
    }
}

?>