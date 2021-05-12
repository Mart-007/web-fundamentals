<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ninja extends CI_Controller {

    public function get_ninja(){
        if($this->session->userdata('gold') == FALSE){
            $this->session->set_userdata('gold', 0);
        }
        if($this->session->userdata('actvities') == FALSE){
            $activity = array();
            $this->session->set_userdata('activities', $activity);
        }
        $this->load->view('ninjaGold');

    }
    public function farm(){
        $gold = rand(10, 20);
        $this->session->set_userdata('gold', ($this->session->userdata('gold') + $gold));
        $process = $this->session->userdata('activities');
        array_unshift($process, "<p class=count> Earned" . ' ' . $gold . ' ' ."gold from the farm! (".date('Y/j/d h:i a').")</p>");
        $this->session->set_userdata('activities', $process);
        $this->load->view('ninjaGold');
    }
    public function house(){
        $gold = rand(5, 10);
        $this->session->set_userdata('gold', ($this->session->userdata('gold') + $gold));
        $process = $this->session->userdata('activities');
        array_unshift($process, "<p class=count> Earned" . $gold . "gold from the house (".date('Y/j/d h:i a').")</p>");
        $this->session->set_userdata('activities', $process);
        $this->load->view('ninjaGold');
    }
    public function cave(){
        $gold = rand(2, 5);
        $this->session->set_userdata('gold', ($this->session->userdata('gold') + $gold));
        $process = $this->session->userdata('activities');
        array_unshift($process, "<p class=count> Earned" . $gold . "gold from the cave (". date('Y/j/d h:i a') .")</p>");
        $this->session->set_userdata('activities', $process);
        $this->load->view('ninjaGold');
    }
    public function casino(){
        $gold = rand(-50, 50);
        $this->session->set_userdata('gold', ($this->session->userdara('gold') + $gold));
        if($gold > 0){
            $process = $this->session->userdata('activities');
            array_unshift($process, "<p class=count> Entered a casino and earned" . $gold . " gold from the casino(". date('Y/j/d h:i a') .")</p>");
        }
        elseif($gold == 0){
            $process = $this->session->userdata('activities');
            array_unshift($process, "<p class=count> Entered a casino and had no change of gold! (". date('Y/j/d h:i a') .")</p>");
            $this->session->set_userdata('activities', $process);
        }
        else{
            $process = $this->session->userdata('activities');
            array_unshift($process, "<p class=red> Entered casino and lost" . abs($gold). "gold... Ouch!(". date('Y/j/d h:i a') .")</p>");
            $this->session->set_userdata('activities', $process);
        }
        $this->load->view('ninjaGold');
    }
    public function restart(){
        $this->session->sess_destroy();
        redirect('ninjaGold');
    }

}