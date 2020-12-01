<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function register($tabel,$data)
      {
      $this->db->insert($tabel,$data);
      }
  }

?>
