<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ninja extends CI_Controller {

    public function get_ninja(){
        $this->load->view('NinjaGold/ninjaGold');
    }
}