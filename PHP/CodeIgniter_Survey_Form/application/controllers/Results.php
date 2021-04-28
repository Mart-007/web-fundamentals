<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller{ 
    public function index(){
        $name = $this->input->post('name');
        $location = $this->input->post('location');  
        $language = $this->input->post('language');
        $comment = $this->input->post('comment');
        
        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('location', $location);
        $this->session->set_userdata('language', $language);
        $this->session->set_userdata('comment', $comment);

        if($this->session->userdata('count')){
            $count = $this->session->userdata('count');
            $this->session->set_userdata('count', $count + 1);
        } else{
            $this->session->set_userdata('count', 1);
        }
        $this->load->view('survey_form/results');
    }

}

?>