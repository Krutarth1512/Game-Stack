<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Main_model extends CI_Model {

    //login code of admin panel
    public function get_admin_email($email){
      $this->db->where('email',$email);
      $query = $this->db->get('admin');
      return $query->row();
    }
    public function login_process($data)
    {
      $this->db->where('email',$data['email']);
      $this->db->where('password',$data['password']);
      $query = $this->db->get('admin');
      return $query->row();
    }

    //login modal of client-side home page
    public function get_current_username($email){
      $this->db->where('u_email',$email);
      $query = $this->db->get('user');
      return $query->row();
    }
    public function login_processes($data)
    {
      $this->db->where('u_email',$data['ecmail']);
      $this->db->where('u_pass',$data['cpass']);
      $query = $this->db->get('user');
      return $query->row();
    }
    //addition of product in view section
    public function get_all_product(){
      $query= $this->db->get('products');
      return $query->result();
    }
  }
?>
