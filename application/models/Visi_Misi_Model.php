<?php

class Visi_Misi_Model extends CI_Model {
  public function tampilkan_misi() {
    return $this->db->get('misi')->result_array();
  }

  public function tampilkan_visi() {
    return $this->db->get('visi')->row_array();
  }
}