<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
  private $data = NULL;

  public function __construct() {
    parent::__construct();

    $this->load->model('PPDB_Model', 'ppdb');
    
    $this->data['judul_aplikasi'] = "SEKOLAH DASAR NEGERI PALAMPITAN";
    $this->data['mendaftar'] = FALSE;
  }

  public function index() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/main');
    $this->load->view('template/footer');
  }

  public function profil() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/profil/semua');
    $this->load->view('template/footer');
  }

  public function ppdb($tahun = NULL) {
    // agar pada bagian PPDB / Pendaftaran tidak tampil tombol REGISTRASI PPDB
    $this->data['mendaftar'] = TRUE;

    if(!$tahun) $tahun = date('Y', time());

    $data['tahun_satu'] = $tahun;
    $data['tahun_dua'] = $tahun + 1;

    if($this->form_validation->run() === FALSE) {
      $this->load->view('template/header', $this->data);
      $this->load->view('template/topbar');
      $this->load->view('template/navbar');
      $this->load->view('app/ppdb/daftar', $data);
      $this->load->view('template/footer');
    } else {
      $data_siswa = [
        'id' => '',
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'nama_panggilan' => $this->input->post('nama_panggilan'),
        'NIK_siswa' => $this->input->post('NIK_siswa'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'agama' => $this->input->post('agama'),
        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
        'anak_ke' => $this->input->post('anak_ke'),
        'saudara_kandung' => $this->input->post('saudara_kandung'),
        'saudara_tiri' => $this->input->post('saudara_tiri'),
        'saudara_angkat' => $this->input->post('saudara_angkat'),
        'bahasa' => $this->input->post('bahasa'),
        'berat_badan' => $this->input->post('berat_badan'),
        'tinggi_badan' => $this->input->post('tinggi_badan'),
        'golongan_darah' => $this->input->post('golongan_darah'),
        'memiliki_penyakit' => $this->input->post('memiliki_penyakit'),
        'alamat' => $this->input->post('alamat'),
        'tinggal_dengan' => $this->input->post('tinggal_dengan'),
        'nomor_hp' => $this->input->post('nomor_hp'),
        'status' => $this->input->post('terdaftar'),
        'tahun_ajaran' => $this->input->post('tahun_ajaran'),
        'tanggal_mendaftar' => data('Y-m-d', time())
      ];

      $data_ortu = [
        'id' => '',
        'id_siswa' => NULL,
        'nama_ayah' => $this->input->post('nama_ayah'),
        'NIK_ayah' => $this->input->post('NIK_ayah'),
        'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
        'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
        'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'NIK_ibu' => $this->input->post('NIK_ibu'),
        'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
        'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
        'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
        'nama_wali' => $this->input->post('nama_wali'),
        'NIK_wali' => $this->input->post('NIK_wali'),
        'pendidikan_wali' => $this->input->post('pendidikan_wali'),
        'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
        'hubungan_wali_siswa' => $this->input->post('hubungan_wali_siswa')
      ];

      $data_asal_siswa = [
        'id' => $this->input->post('id'),
        'id_siswa' => NULL,
        'masuk_sebagai' => $this->input->post('masuk_sebagai'),
        'asal_siswa' => $this->input->post('asal_siswa'),
        'nama_sekolah' => $this->input->post('nama_sekolah'),
        'nomor_tahun_SK' => $this->input->post('nomor_tahun_SK'),
        'lama_belajar' => $this->input->post('lama_belajar')
      ];

      if($this->ppdb->registrasi($data_siswa, $data_ortu, $data_asal_siswa)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data registrasi berhasil dikirim.</dib>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data registrasi gagal dikirim.</dib>');
      }

      redirect('Landing/ppdb/'.$tahun);
    }

  }

  public function ppdb_informasi($tahun) {
    $data['tahun_satu'] = $tahun;
    $data['tahun_dua'] = $tahun + 1;

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/ppdb/info', $data);
    $this->load->view('template/footer');
  }

  public function ppdb_edaran($tahun) {
    $data['tahun_satu'] = $tahun;
    $data['tahun_dua'] = $tahun + 1;

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/ppdb/edaran', $data);
    $this->load->view('template/footer');
  }

  public function dokumentasi() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/semua');
    $this->load->view('template/footer');
  }

  public function kurikulum() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/kurikulum');
    $this->load->view('template/footer');
  }

  public function kalender() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/kalender');
    $this->load->view('template/footer');
  }
}