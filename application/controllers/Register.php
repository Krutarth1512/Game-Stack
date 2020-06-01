<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('mymodel');
	  $this->load->library('form_validation');
	}

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
	public function index(){
		$this->form_validation->set_rules('email','Email','valid_email|required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');

		if($this->form_validation->run()==false){
			$this->load->view('register');
		}
		else
		{
				$data=array(
										'cust_email' =>$this->input->post('email'),
										'cust_pass' => $this->input->post('password'),
										'cust_fname'=> $this->input->post('firstname'),
										'cust_lname' =>$this->input->post('lastname'),
				);
				$data['add']=$this->mymodel->insert_data($data);
				redirect('register'.$this->session->set_flashdata('add','Signup Completed'));

		}

	}
}
