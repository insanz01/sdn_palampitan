<?php

class Karyawan_Model extends CI_Model {
  public function tampilkan_karyawan($kategori) {
    return $this->db->get_where('karyawan', ['kategori' => $kategori])->result_array();
  }
}