<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
	$this->load->helper('form');
  }
 
  function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $email    = $this->input->post('email',TRUE);
	$password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($email,$password);
	
    if(!empty($validate)){	
        $name  = $validate['username'];
        $email = $validate['email'];
        $level = $validate['access_level'];
        $sesdata = array(
            'username'  	=> $name,
            'email'     	=> $email,
            'access_level'  => $level,
            'logged_in' 	=> TRUE
        );
        $this->session->set_userdata($sesdata);

        redirect('dashboard');

    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('');
    }
  }
 
  function logout(){
	  
      $this->session->sess_destroy();
      redirect('');
  }
 
}