<?php

class Sekolah_Model extends CI_Model {
  public function tampilkan_data_sekolah() {
    return $this->db->get('sekolah')->row_array();
  }

  public function tampilkan_kontak() {
    return $this->db->get('kontak_sekolah')->row_array();
  }
}