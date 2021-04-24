<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		echo "This is Main class";
	}
	public function hello(){
		echo "hello";
	}
	public function hi(){
		echo "hi";
	}
	public function say_anything($say){
		echo strtoupper($say);
	}
    public function danger(){
        redirect('/main');
    }
    public function world(){
        $this->load->view('main/world');
    }
    public function ninja($num){
        if($num !== null){
            for($i=0; $i<$num; $i++){
                $this->load->view('main/ninja');
            }
        } else {
            for($i=0; $i<5; $i++){
                $this->load->view('main/ninja');
            }
        }
    }

}
?>