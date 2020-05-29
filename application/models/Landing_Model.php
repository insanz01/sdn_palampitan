<?php

class Landing_Model extends CI_Model {
  
  public function tampilkan_data_landing() {
    return $this->db->get('landing')->result_array();
  }
}