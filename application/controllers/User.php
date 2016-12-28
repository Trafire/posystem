<?php
class User extends CI_Controller {
    public function index()
    {
       $data['title']= "Register";
       $this->load->view('header'); 
       $this->load->view('forms/create_user_view');
       $this->load->view('footer');
       
    }

    public function create_user()
    {
        $username = $this->input->post('username');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $status = "unconfirmed";

        $this->load->model('User_model');
        $this->User_model->create_user($username,$firstname,$lastname, $password, $email, $status);
	echo "registered";
        
    }   
    public function test()
    {
        echo "tested";
    }
}
?>
