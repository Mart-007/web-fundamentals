<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
	
	public function index()
	{
		$this->load->view('add_course_page');
	}
    public function add_course(){
        $course_details['title'] = $this->input->post('title');
        $course_details['description'] = $this->input->post('description');
        $this->load->model('Course_model');
        $add_course = $this->Course_model->add_course($course_details);
        if($add_course){
            echo "Course is added";
        }
    }

}