<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
   $this->load->model('Main_model');
   $this->load->library('form_validation');
 }
 public function index(){
   $this->form_validation->set_rules('pname','productname','required');
   $this->form_validation->set_rules('price','productprice','required');
   $this->form_validation->set_rules('pdetail','description','required');
   $this->form_validation->set_rules('edition','edition','required');
   $this->form_validation->set_rules('platform','platform','required');
   $this->form_validation->set_rules('rrelease','release','required');
   $this->form_validation->set_rules('mos','mos','required');
   $this->form_validation->set_rules('mprocessor','mprocessor','required');
   $this->form_validation->set_rules('mgraphics','mgraphics','required');
   $this->form_validation->set_rules('mram','mram','required');
   $this->form_validation->set_rules('mresoltuion','mresoltuion','required');
   $this->form_validation->set_rules('mvideo','mvideo','required');
   $this->form_validation->set_rules('ros','ros','required');
   $this->form_validation->set_rules('rprocessor','rprocessor','required');
   $this->form_validation->set_rules('rgraphics','rgraphics','required');
   $this->form_validation->set_rules('rram','rram','required');
   $this->form_validation->set_rules('rresoltuion','rresoltuion','required');
   $this->form_validation->set_rules('rvideo','rvideo','required');

   if($this->form_validation->run()==false){
     $this->load->view('admin/product');
   }
   else
   {
     if(empty($_FILES['product_image']['name']))
     {
               $product_image="";
     }
     else
     {
         $config['upload_path'] = 'uploads/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '2048';
         $config['max_width'] = '5000';
         $config['max_height'] = '5000';
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

         if (!$this->upload->do_upload('product_image'))
         {
             $error = array('error' => $this->upload->display_errors());
         }
         else
         {
             $image = $this->upload->data();
             $product_image=$image['file_name'];
         }
     }


       $data=array(
                   'pro_name' =>$this->input->post('pname'),
                   'pro_price' =>$this->input->post('price'),
                   'pro_details' => $this->input->post('pdetail'),
                   'pro_pic' => $product_image,
                   'edition' =>$this->input->post('edition'),
                   'platform' =>$this->input->post('platform'),
                   'rrelease' =>$this->input->post('rrelease'),
                   'mos' => $this->input->post('mos'),
                   'mprocessor' =>$this->input->post('mprocessor'),
                   'mgraphics' =>$this->input->post('mgraphics'),
                   'mram' => $this->input->post('mram'),
                   'mresoltuion' =>$this->input->post('mresoltuion'),
                   'mvideo' =>$this->input->post('mvideo'),
                   'ros' => $this->input->post('ros'),
                   'rprocessor' =>$this->input->post('rprocessor'),
                   'rgraphics' =>$this->input->post('rgraphics'),
                   'rram' => $this->input->post('rram'),
                   'rresoltuion' =>$this->input->post('rresoltuion'),
                   'rvideo' =>$this->input->post('rvideo'),

       );
       $data['add']=$this->Mymodel->insert_product($data);
       redirect('admin/productlist'.$this->session->set_flashdata('add','Signup Completed'));
   }
 }
}
?>
