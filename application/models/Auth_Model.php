<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	//ambil data dari database yang usernamenya $username dan passwordnya password
	public function login($tabel,$where)
	{
  	  return $this->db->get_where($tabel,$where);
	}
	//update user
	public function update($idname,$data,$id,$tabel)
	{
	    $where = $this->db->where($idname,$id);
	    $this->db->update($tabel,$data);
	}
	public function get_by_cookie($cookie,$siapa)
	{
		$this->db->where('cookie',$cookie);
		return $this->db->get($siapa);
	}
}
