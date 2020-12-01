<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct() {
      parent::__construct();
      if(!$this->session->userdata('logged'))
  		{
  			redirect(base_url("index.php/Home"));
  		}
    }
  public function index()
  {
    $this->load->view('user/home');
  }
  public function daftarbuku()
  {
    $data['buku'] = $this->M_Admin->ambil('Buku');
    $this->load->view('user/daftarbuku',$data);
  }
  public function logout()
  {
      // delete cookie dan session
      delete_cookie('acode');
      $this->session->sess_destroy();
      redirect('home');
  }
}
