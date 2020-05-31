<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
			redirect('home');
		}
		$this->form_validation->set_rules('email','Email','valid_email|required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
				$this->load->view('login');
		}
		else{
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			$user_info = $this->Main_model->get_current_username($username);
			if (!empty($user_info)){
				$data = array(
				'u_email'=> $username,
				'u_pass'=> $password
				);
				$islogin = $this->Main_model->login_processes($data);
				if (!empty($islogin)) {
					$sessiondata = array(
							'user_name' => $islogin->email,
							'login_id' => $islogin->login_id,
							'user_logged_in' => true
						);
						$this->session->set_userdata($sessiondata);
				}
				else{
						redirect('login'.$this->session->set_flashdata('wrong_data','Wrong Password'));
				}
			}
			else{
			redirect('login'.$this->session->set_flashdata('no_email','No Account exists with this email'));
			}
			redirect('login');
		}
	}
	public function logout()
	{
		if($this->session->userdata('user_logged_in')){
			session_destroy();
		}
		redirect('login');
	}
}