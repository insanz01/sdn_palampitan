<?php

class Akademik_Model extends CI_Model {
  public function tampilkan_kurikulum() {
    return $this->db->get_where('kurikulum', ['id' => 1])->row_array();
  }

  public function tampilkan_kalender() {
    return $this->db->get_where('kalender_akademik', ['id' => 1])->row_array();
  }
}