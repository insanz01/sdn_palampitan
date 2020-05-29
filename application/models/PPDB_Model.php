<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB_Model extends CI_Model {
  
  public function registrasi($data_siswa, $data_wali, $data_asal_siswa) {
    $this->db->insert('ppdb_calon_siswa', $data_siswa);
    $id_siswa = $this->db->insert_id();

    $data_wali['id_siswa'] = $id_siswa;
    $data_asal_siswa['id_siswa'] = $id_siswa;

    $requirement_satu = $this->db->insert('ppdb_ortu_wali', $data_wali);
    $requirement_dua = $this->db->insert('ppdb_asal_mula_siswa', $data_asal_siswa);

    return ($requirement_satu && $requirement_satu);
  }

  public function ambil_informasi($tahun) {
    $this->db->select('informasi');
    $this->db->from('ppdb');
    $this->db->where('tahun_ajaran', $tahun);
    return $this->db->get()->row_array();
  }

  public function ambil_edaran($tahun) {
    $this->db->select('edaran');
    $this->db->from('ppdb');
    $this->db->where('tahun_ajaran', $tahun);
    return $this->db->get()->row_array();
  }
}