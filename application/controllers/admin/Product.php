<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

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
 }
 public function index(){
   $this->form_validation->set_rules('pname','productname','required');
   $this->form_validation->set_rules('price','productprice','required');
   $this->form_validation->set_rules('pdetail','description','required');

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
                   'productname' =>$this->input->post('pname'),
                   'product_price' =>$this->input->post('price'),
                   'product_detail' => $this->input->post('pdetail'),
                   'picture' => $product_image,

       );
       $data['add']=$this->Mymodel->insert_product($data);
       redirect('admin/product'.$this->session->set_flashdata('add','Signup Completed'));
   }
 }
}
?>
