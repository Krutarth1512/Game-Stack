<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('Mymodel');
   $this->load->library('form_validation');
   $this->load->library('session');
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
  	public function index()
  	{
  		$data['user']= $this->Mymodel->get_all_users();
  		$this->load->view('admin/users',$data);
  	}

    public function delete() {
      $user_id=$this->uri->segment(4);
      $data['del']=$this->Mymodel->delete_user($user_id);
      redirect('admin/users');
      }

    public function edit(){
        $user_id=$this->uri->segment(4);
        $data['ed']=$this->Mymodel->user_details($user_id);

        $this->form_validation->set_rules('email','Email','valid_email|required');
    		$this->form_validation->set_rules('password','password','required');
    		$this->form_validation->set_rules('address','Address','required');
    		$this->form_validation->set_rules('city','City','required');
    		$this->form_validation->set_rules('state','State','required');
    		$this->form_validation->set_rules('country','Country','required');

    		if($this->form_validation->run()==false){
    			$this->load->view('admin/edit',$data);
    		}
    		else
    		{
    				$data=array(
    										'email' =>$this->input->post('email'),
    										'password' => $this->input->post('password'),
    										'address'=> $this->input->post('address'),
    										'city' =>$this->input->post('city'),
    										'state' => $this->input->post('state'),
    										'country'=> $this->input->post('country'),

    				);
    				$data['add']=$this->Mymodel->update_data($data,$user_id);

            redirect('admin/users/edit/'.$user_id.$this->session->set_flashdata('add','updated successfully'));

    		}
    }
}
