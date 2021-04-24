<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		echo "I am the main class!";
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

}
?>