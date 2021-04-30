<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		//call model
		$users = $this->User->get_users();
		$countries = $this->Country->get_countries();

		$this->load->view('users/index', array_merge($users, array('countries' => $countries)));
	}

	// public function filter()
	// {
	// 	$gender =  array($this->input->post('gender[0]', TRUE), 
	// 					$this->input->post('gender[1]', TRUE));
	// 	$country = $this->input->post('country', TRUE);
		
	// 	$result = $this->User->get_users($gender, $country);
		
	// 	$this->load->view('partials/records', array("users" => $result['users']));

	// 	//returns the content rather than sending(displaying) data to browser directly.
	// 	// $final = array(
	// 	// 	'records' => $this->load->view('partials/records', array("users" => $result['users']), TRUE),
	// 	// 	'count'   => $result['count']
	// 	// );

	// 	// echo json_encode($final, TRUE);
	// }
}

?>