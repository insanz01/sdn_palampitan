<?php

class Kepsek_Model extends CI_Model {
  public function tampilkan_kepala_sekolah () {
    return $this->db->get('kepala_sekolah')->row_array();
  }
}