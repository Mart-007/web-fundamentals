<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function index()
	{
		$this->load->view('users/index');
	}
	public function new(){
        $this->load->view('users/new');
    }
	public function create(){
		$this->load->view('users/create');
	}
	public function counter(){
		$this->load->view('users/count');
	}
	public function reset(){
		unset($views);
		$this->load->view('users/reset');
	}
	public function say($talk, $multi = NULL)
	{
        $say['talk'] = $talk;
		if($multi != NULL){
            
            for($i=0; $i<$multi; $i++){
                $this->load->view('users/say', $say);
            }
        }
        else{
            $this->load->view('users/say', $say);
        }
	}
    public function mprep()
    {
        $view_data = array(
            'name' => "Michael Choi",
            'age'  => 40,
            'location' => "Seattle, WA",
            'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas", "Gaming", "Swimming", "Anime", "Manga")
        );
        $this->load->view('users/mprep', $view_data);
    }

}
?>