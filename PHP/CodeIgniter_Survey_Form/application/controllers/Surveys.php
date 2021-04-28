<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {
	
	public function process_form()
	{
        $this->load->view('survey_form/form');
    }
    public function session_destroy(){
        $this->load->session_destroy();
        redirect('');
    }

}
