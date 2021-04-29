<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller { 
    public function index(){
        if($this->session->userdata('count')){
            $this->session->set_userdata('count', 1);
        }
            $result['str'] = "Generate World";
            $result['count'] = $this->session->userdata('count');
            $this->load->view('random_word-generator/random_word', $result);
    }
    public function rand_number(){
        $temp = $this->session->userdata('count');
        $temp += 1;
        $this->session->set_userdata('count', $temp);
        $result['count'] = $this->session->userdata('count');

        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $str = '';
        for($i=0; $i<14; $i++){
            $str = $char[rand(0, strlen($char) -1)];
        }
        $this->session->set_userdata('rand_num', $str);
        $result['str'] = $this->session->userdata('rand_num');
        $this->load->view('random_word-generator/random_word', $result);
    }
}

