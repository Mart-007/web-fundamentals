<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weathers extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
	}

	/*This function is triggered when weather form is submitted to search for a particular city: Owner: Reymart */
	public function get_weather() {
		echo $this->input->post("city");
	}

	public function index() {
		$this->load->view('home');
	}
}
