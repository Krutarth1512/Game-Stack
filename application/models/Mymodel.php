<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

  public function insert_data($data)
  {
    $query = $this->db->insert('signup',$data);
    return $query;
  }
  public function get_all_users()
  {
    $query= $this->db->get('signup');
    return $query->result();
  }

  public function delete_user($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->delete('signup');
  }

  public function user_details($user_id){
    $this->db->where('user_id', $user_id);
    $query = $this->db->get('signup');
    return $query->row();
  }
  public function update_data($data,$user_id){
    $this->db->where('user_id', $user_id);
    $query = $this->db->update('signup',$data);
  }
  public function write_data($data){
    $que = $this->db->insert('members',$data);
    return $que;
  }
  public function get_current_user_info_from_email($email)
  {
    $this->db->where('email', $email);
    $query = $this->db->get('signup');
    return $query->row();
  }
  public function login_process($data){
    $this->db->where('email',$data['email']);
    $this->db->where('password',$data['password']);
    $query = $this->db->get('signup');
    return $query->row();
  }

  //========================================================================================================
  //ADD PRODUCTS FROM ADMIN PANEL
  public function insert_product($data){
    $query = $this->db->insert('products',$data);
    return $query;
  }
  public function get_all_product(){
    $query= $this->db->get('products');
    return $query->result();
  }

  public function delete_product($id){
    $this->db->where('pic_id', $id);
    $this->db->delete('products');
  }

  public function product_details($id){
    $this->db->where('pic_id', $id);
    $query = $this->db->get('products');
    return $query->row();
  }
  public function update_product($data,$id){
    $this->db->where('pic_id', $id);
    $query = $this->db->update('products',$data);
  }

  //============================================================================================
  //ADD TO CART
  public function insert_cart($data){
    $query = $this->db->insert('cart',$data);
    return $query;
  }
  public function get_all_cart(){
    $query= $this->db->get('cart');
    return $query->result();
  }
  public function cart_details($id){
    $this->db->where('cart_id', $id);
    $query = $this->db->get('cart');
    return $query->row();
  }
}
