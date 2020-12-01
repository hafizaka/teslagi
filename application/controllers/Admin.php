<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct() {
      parent::__construct();
      if(!$this->session->userdata('logged'))
  		{
  			redirect(base_url("index.php/Home"));
  		}

  }
  public function index()
  {
    $this->load->view('admin/home');
  }

  // ------------BUKU-----------------------
  public function lihatbuku(){
    $data['buku'] = $this->M_Admin->ambil('Buku');
    $this->load->view('admin/lihatbuku',$data);
  }
  public function tambahbuku(){
    $this->load->view('admin/tambahbuku');
  }
  public function addbuku(){
    $judul = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kotaterbit = $_POST['kota_terbit'];
    $jumlahhalaman = $_POST['jumlah_hlmn'];
    $tahunterbit = $_POST['tahun_terbit'];
    $this->M_Admin->addbuku('Buku',[
      'judul_buku' => $judul,
      'isbn' => $isbn,
      'pengarang' => $pengarang,
      'penerbit' => $penerbit,
      'kota_terbit' => $kotaterbit,
      'tahun_terbit' => $tahunterbit,
      'jlh_halaman' => $jumlahhalaman,
    ]);
    $this->lihatbuku();
  }
  public function hapusbuku($id){
    $this->M_Admin->hapusbuku('Buku',$id);
    $this->lihatbuku();
  }
  public function editbuku($id){
    $data['buku'] = $this->M_Admin->ambil_by_id('Buku',$id);
    $this->load->view('admin/editbuku',$data);
  }
  public function updatebuku($id){
    $judul = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kotaterbit = $_POST['kota_terbit'];
    $jumlahhalaman = $_POST['jumlah_hlmn'];
    $tahunterbit = $_POST['tahun_terbit'];
    $this->M_Admin->updatebuku('Buku',$id,[
      'judul_buku' => $judul,
      'isbn' => $isbn,
      'pengarang' => $pengarang,
      'penerbit' => $penerbit,
      'kota_terbit' => $kotaterbit,
      'tahun_terbit' => $tahunterbit,
      'jlh_halaman' => $jumlahhalaman,
    ]);
    $this->lihatbuku();
  }


  // -------------------DONATUR-----------------
  public function lihatdonatur()
  {
    $data['donatur'] = $this->M_Admin->ambil('donatur');
    $this->load->view('admin/lihatdonatur',$data);
  }
  public function tambahdonatur(){
    $this->load->view('admin/tambahdonatur');
  }
  public function adddonatur(){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $nohp = $_POST['nohp'];
    $sumbangan = $_POST['sumbangan'];
    $jumlahsumbangan = $_POST['jumlahsumbangan'];
    $this->M_Admin->adddonatur('donatur',[
      'nama_donatur' =>$nama,
      'alamat_donatur' =>$alamat,
      'pekerjaan_donatur' => $pekerjaan,
      'hp_donatur' => $nohp,
      'jenis_sumbangan' => $sumbangan,
      'jlh_sumbangan' => $jumlahsumbangan
    ]);
    $this->lihatdonatur();
  }
  public function hapusdonatur($id){
    $this->M_Admin->hapusdonatur('donatur',$id);
    $this->lihatdonatur();
  }
  public function editdonatur($id){
    $data['donatur'] = $this->M_Admin->ambildonatur_by_id('donatur',$id);
    $this->load->view('admin/editdonatur',$data);
  }

  public function updatedonatur($id){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $nohp = $_POST['nohp'];
    $sumbangan = $_POST['sumbangan'];
    $jumlahsumbangan = $_POST['jumlahsumbangan'];
    $this->M_Admin->updatedonatur('donatur',$id,[
    'nama_donatur' =>$nama,
    'alamat_donatur' =>$alamat,
    'pekerjaan_donatur' => $pekerjaan,
    'hp_donatur' => $nohp,
    'jenis_sumbangan' => $sumbangan,
    'jlh_sumbangan' => $jumlahsumbangan
    ]);
    $this->lihatdonatur();
  }

  public function logout()
  {
      // delete cookie dan session
      delete_cookie('acode');
      $this->session->sess_destroy();
      redirect('home');
  }

}
