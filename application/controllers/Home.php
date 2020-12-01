<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
      parent::__construct();
      if($this->session->userdata('logged'))
  		{
  			redirect(base_url("index.php/User"));
  		}

  }
  public function index()
  {
    
      // cek session
      if ($this->session->userdata('logged')) {
          redirect('user');
      } else {
          $data = array(
              'username' => set_value('username'),
              'password' => set_value('password'),
              'remember' => set_value('remember'),
                'message' => $this->session->flashdata('message'),
          );

           $this->load->view('home');
           if($_GET['halaman'] == NULL){
           $this->load->view('kutipan');
          }
           $this->load->view('footer');
      }
  }

  public function registeruser(){
    $this -> form_validation -> set_rules('username', 'Username', 'trim|required');
    $this -> form_validation -> set_rules('nama', 'Nama', 'trim|required');
    $this -> form_validation -> set_rules('password', 'Password', 'trim|required');
    $this -> form_validation -> set_rules('konfirmpassword', 'Konnfirmasi Password', 'trim|required|matches[password]');
    if($this->form_validation->run() == FALSE){
      $this->load->view('home');
      $this->load->view('registeruser');
      $this->load->view('footer');
    }
    else {
    $username = $this->input->post('username');
    $nama = $this->input->post('nama');
    $password = sha1($this->input->post('password'));
    $this->M_User->register('User',[
      'nama'=>$nama,
      'username' => $username,
      'password' => $password
    ]);
    redirect('home?info=Akun berhasil didaftarkan');
  }
}
  public function login($siapa)
  {
    $this -> form_validation -> set_rules('username', 'Username', 'trim|required');
    $this -> form_validation -> set_rules('password', 'Password', 'trim|required');
    if($this->form_validation->run() == FALSE){
      $this->load->view('home');
      if($siapa == 'User')
      $this->load->view('loginuser');
      else
      $this->load->view('loginadmin');
      $this->load->view('footer');
    }else{
      $username = $this->input->post('username');
      $password = sha1($this->input->post('password'));
      $remember = $this->input->post('remember');

      $row = $this->Auth_Model->login($siapa, [
        'username' => $username,
        'password' => $password
        ])->row();
      if ($row) {
        if($siapa=='Admin'){
        $id = $row->id_admin;
        $idname = 'id_admin';
      }
        else if($siapa=='User'){
        $id = $row->id_user;
        $idname = 'id_user';
      }    // login berhasil
          // 1. Buat Cookies jika remember di check
            if ($remember) {
              $key = random_string('alnum', 64);
              $this->input->set_cookie('acode', $key, 3600*24*30); // set expired 30 hari kedepan
              //
              // simpan key di database
              $update_key = array(
                  'cookie' => $key
              );
              $this->Auth_Model->update($idname,$update_key,$id,$siapa);
          }

          $this->_daftarkan_session($row,$siapa);
      } else {
          // login gagal
          redirect('home?notif=Username atau Password Salah');
      }
    }

  }


  public function _daftarkan_session($row,$siapa) {
      // 1. Daftarkan Session
      $sess = array(
          'logged' => TRUE,
          'id_user' => $row->id_user,
          'id_admin' => $row->id_admin,
          'username' => $row->username,
      );
      $this->session->set_userdata($sess);

      // 2. Redirect ke home
      if($siapa == 'User')
      redirect('User');
      else if($siapa =='Admin')
      redirect('Admin');
  }



}
