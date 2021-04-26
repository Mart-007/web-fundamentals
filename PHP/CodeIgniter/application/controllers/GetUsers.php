<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class GetUsers extends CI_Controller { 

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
    }
    
    public function index(){
        $this->load->database();
        $this->load->model('users');
        $data['data'] = $this->users->select();
        $this->load->view('exam/users', $data, FALSE);
    }

    public function get_country(){
        $country = $_GET['country'];
        $data = $this->db->get_where('users.all_users',['country_id' => $country])->result();       
    
                    foreach($data->result() as $row): ?>
                        ?><tr>
                            <td><?php echo $row->name;?></td>
                            <td class="gray"><?php echo $row->age;?></td>
                            <td><?php echo $row->gender;?></td>
                            <td class="gray"><?php echo $row->country;?></td>
                         </tr>
                        
                    <?php endforeach?> <?php }
                    // //post data
        // $postData = $this->input->post();
        // //load model
        // $this->load->model('users');
        // //get data
        // $data = $this->users->get_country($postData);
        // echo json_encode($data);
    }

    // public function getUsers(){

    //     $page =  $_GET['page'];
    //     $this->load->model('users');
    //     $Users = $this->users->getUsers($page);
    //     foreach($Users as $User){
    //     echo "<tr><td>".$User->id."</td>
    //     <td>".$User->country_name."</td>
    //     <td>".$User->country_code."</td></tr>";
    // }
    // exit;
    // }

