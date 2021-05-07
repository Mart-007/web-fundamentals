<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('country');
    }

	public function index()
	{
        //call model
        $countries = $this->country->get_countries();
        $this->load->view('users/index', array('countries' => $countries));
	}
    public function filter(){
        $gender = array($this->input->post('gender[0]', TRUE), $this->input->post('gender[1]', TRUE));
        $country = $this->input->post('country', TRUE);

        $results = $this->user->get_users($gender, $country);

        	$final = array(
			'records' => $this->load->view('initial/data', array("users" => $results['users']), TRUE),
			'count'   => $results['count']
		);

		echo json_encode($final, TRUE);


        // $final_results = array('data' => $this->load->view('initial/data', array("users" => $results['users']), TRUE), 
        //                 'count' => $results['count']);
        //                 echo json_encode($final_results, TRUE);
    }
}

//returns the content rather than sending(displaying) data to browser directly.
	// 	// $final = array(
	// 	// 	'records' => $this->load->view('partials/records', array("users" => $result['users']), TRUE),
	// 	// 	'count'   => $result['count']
	// 	// );

	// 	// echo json_encode($final, TRUE);
?>