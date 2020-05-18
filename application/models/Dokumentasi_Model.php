<?php

class Dokumentasi_Model extends CI_Model {
  public function tampilkan_dokumentasi($id = NULL) {
    if($id) return $this->db->get_where('dokumentasi', ['id' => $id])->row_array();
    return $this->db->get('dokumentasi')->result_array();
  }
}