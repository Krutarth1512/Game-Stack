<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

public function __construct()
 {
   parent::__construct();
   $this->load->model('Mymodel');
   $this->load->library('form_validation');
	 $this->load->library('session');
 }

	public function index()
  {
    if ($this->session->userdata('customer_logged_in')) {
        redirect('home');
    }
    $this->form_validation->set_rules('email','Email','valid_email|required');
    $this->form_validation->set_rules('password','Password','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('clogin');
    }
    else{
          $username = $this->input->post('email');
          $password = $this->input->post('password');
          $user_info = $this->Mymodel->get_customer_email($username);
          if (!empty($user_info)){
            $data = array(
            'email'=> $username,
            'password'=> $password
            );
            $islogin = $this->Mymodel->login_data($data);
              if (!empty($islogin)) {
                  $sessiondata = array(
                         'user_name' => $islogin->email,
                         'login_id' => $islogin->login_id,
                         'user_logged_in' => true
                     );
                    $this->session->set_userdata($sessiondata);
              }
              else{
                   redirect('clogin'.$this->session->set_flashdata('wrong_data','Wrong Password'));
              }
        }
        else{
          redirect('clogin'.$this->session->set_flashdata('no_email','No Account exists with this email'));
        }
        redirect('home');
    }
}
 public function logout()
 {
	 if($this->session->userdata('customer_logged_in')){
		 session_destroy();
	 }
	 redirect('clogin');
 }
}
