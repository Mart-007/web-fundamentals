<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time extends CI_Controller {

    public function main(){
        date_default_timezone_set('Asia/Manila');

        $this->load->helper('date');
        $datestring= '%F %j, %Y <br> %h:%i %A';
        $time = time();
        $date_now = mdate($datestring, $time);
        $date_time['time_and_date'] = $date_now;

        $this->load->view('time', $date_time);
	}
}
