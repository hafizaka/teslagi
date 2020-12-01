<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function ambil($tabel)
    {
    return $this->db->get($tabel)->result();
    }

    // ----------------buku--------------
    public function ambil_by_id($tabel,$id)
    {
    return $this->db->get_where($tabel,['id_buku'=>$id])->result();
    }
    public function addbuku($tabel,$data)
    {
      $this->db->insert($tabel,$data);
    }
    public function hapusbuku($tabel,$id)
    {
      $this->db->where('id_buku',$id);
      $this->db->delete($tabel);
    }
    public function updatebuku($tabel,$id,$data)
    {
      $this->db->where('id_buku',$id);
      $this->db->update($tabel,$data);
    }

    // ---------------donatur---------------
    public function ambildonatur_by_id($tabel,$id)
    {
    return $this->db->get_where($tabel,['id_donatur'=>$id])->result();
    }
    public function adddonatur($tabel,$data)
    {
      $this->db->insert($tabel,$data);
    }
    public function hapusdonatur($tabel,$id)
    {
      $this->db->where('id_donatur',$id);
      $this->db->delete($tabel);
    }
    public function updatedonatur($tabel,$id,$data)
    {
      $this->db->where('id_donatur',$id);
      $this->db->update($tabel,$data);
    }
  }

?>
