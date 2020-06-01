<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
 {
   parent::__construct();
   $this->load->model('Main_model');
   $this->load->library('form_validation');
	 $this->load->library('session');
 }

	public function index()
 {
     if ($this->session->userdata('user_logged_in')) {
         redirect('admin/product');
     }
     $this->form_validation->set_rules('email','Email','valid_email|required');
     $this->form_validation->set_rules('password','Password','required');
     if ($this->form_validation->run() == false) {
			 $this->load->view('admin/login');
     }
     else{
           $username = $this->input->post('email');
           $password = $this->input->post('password');
           $user_info = $this->Main_model->get_admin_email($username);
           if (!empty($user_info)){
             $data = array(
             'email'=> $username,
             'password'=> $password
             );
             $islogin = $this->Main_model->login_process($data);
               if (!empty($islogin)) {
                   $sessiondata = array(
                          'user_name' => $islogin->email,
                          'login_id' => $islogin->login_id,
                          'user_logged_in' => true
                      );
                     $this->session->set_userdata($sessiondata);
               }
               else{
                    redirect('admin/login'.$this->session->set_flashdata('wrong_data','Wrong Password'));
               }
         }
         else{
           redirect('admin/login'.$this->session->set_flashdata('no_email','No Account exists with this email'));
         }
         redirect('admin/dashboard');
     }
 }
 public function logout()
 {
	 if($this->session->userdata('user_logged_in')){
		 session_destroy();
	 }
	 redirect('admin/login');
 }
}
