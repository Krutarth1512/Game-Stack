<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editproduct extends CI_Controller {

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
   $this->load->model('mymodel');
   $this->load->library('form_validation');
 }
	public function index(){
		$this->form_validation->set_rules('pname','product name','required');
		$this->form_validation->set_rules('price','product price','required');
		$this->form_validation->set_rules('pdetail','product detail','required');

		if($this->form_validation->run()==false){
			$this->load->view('admin/editproduct');
		}
		else
		{
				$data=array(
					'productname' =>$this->input->post('pname'),
					'product_price' => $this->input->post('price'),
					'product_detail'=> $this->input->post('pdetail'),
					'picture'=> $this->input->post('product_image'),
				);
				$data['add']=$this->mymodel->insert_data($data);
				redirect('admin/productlist/edit/'.$this->session->set_flashdata('add','Signup Completed'));

		}

	}
}
