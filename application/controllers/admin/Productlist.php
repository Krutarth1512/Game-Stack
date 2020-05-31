<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productlist extends CI_Controller {

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
  		$data['product']= $this->Mymodel->get_all_product();
  		$this->load->view('admin/productlist',$data);
  	}

    public function delete() {
      $id=$this->uri->segment(4);
      $data['del']=$this->Mymodel->delete_product($id);
      // redirect('admin/productlist');
      // redirect('admin/productlist/'.$this->uri->segment(4).$this->session->set_flashdata('add','product have deleted'));
      redirect('admin/productlist/'.$this->session->set_flashdata('add','product have deleted'));
      }


    public function edit(){
        $id=$this->uri->segment(4);
        $data['ed']=$this->Mymodel->product_details($id);

        $this->form_validation->set_rules('pname','product name','required');
    		$this->form_validation->set_rules('price','product price','required');
    		$this->form_validation->set_rules('pdetail','product detail','required');

    		if($this->form_validation->run()==false){
    			$this->load->view('admin/edit',$data);
    		}
    		else
        {
          if(empty($_FILES['product_image']['name']))
          {
                    $product_image=$data['ed']->picture;
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
            $data['add']=$this->Mymodel->update_product($data,$id);
            redirect('admin/productlist/edit/'.$this->uri->segment(4).$this->session->set_flashdata('add','Modification Completed'));

        }

    }
}
