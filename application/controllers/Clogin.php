<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

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
		$this->load->model('Mymodel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		if ($this->session->userdata('user_logged_in')) {
			redirect('home');
		}
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
				$this->load->view('clogin');
		}
		else{
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			$user_info = $this->Mymodel->get_current_user_info_from_email($username);
			if (!empty($user_info)){
				$data = array(
				'cust_email'=> $username,
				'cust_pass'=> $password
				);
				$islogin = $this->Mymodel->login_process($data);
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
		if($this->session->userdata('user_logged_in')){
			session_destroy();
		}
		redirect('clogin');
	}
}