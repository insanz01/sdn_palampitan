<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
  private $data = NULL;

  public function __construct() {
    parent::__construct();

    $this->load->model('PPDB_Model', 'ppdb');
    $this->load->model('Visi_Misi_Model', 'visi_misi');
    $this->load->model('Akademik_Model', 'akademik');
    $this->load->model('Dokumentasi_Model', 'dokumentasi');
    $this->load->model('Karyawan_Model', 'karyawan');
    $this->load->model('Kepsek_Model', 'kepsek');
    $this->load->model('Sekolah_Model', 'sekolah');
    
    $this->data['judul_aplikasi'] = "SEKOLAH DASAR NEGERI PALAMPITAN";
    $this->data['mendaftar'] = FALSE;
  }

  public function index() {

    // ? bagian ini membutuhkan :
    // * gambar sekolah [done]
    // * deskripsi sekolah [done]
    // * biodata kepala sekolah [done]
    // * visi dan misi [done]

    $data['sekolah'] = $this->sekolah->tampilkan_data_sekolah();

    $data['visi'] = $this->visi_misi->tampilkan_visi();
    $data['misi'] = $this->visi_misi->tampilkan_misi();
    
    $data['kepala_sekolah'] = $this->kepsek->tampilkan_kepala_sekolah();

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/main', $data);
    $this->load->view('template/footer');
  }

  public function profil() {

    // ? bagian ini membutuhkan :
    // * gambar sekolah [done]
    // * data sekolah
    // * identitas sekolah
    // * alamat sekolah
    // * bank sekolah
    // * kepala sekolah [done]
    // * kontak sekolah
    // * data guru [done]
    // * data staff [done]

    $data['kepala_sekolah'] = $this->kepsek->tampilkan_kepala_sekolah();

    $data['sekolah'] = $this->sekolah->tampilkan_data_sekolah();

    $data['guru'] = $this->karyawan->tampilkan_karyawan('Guru');
    $data['staff'] = $this->karyawan->tampilkan_karyawan('Staff');

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/profil/semua', $data);
    $this->load->view('template/footer');
  }

  public function ppdb($tahun = NULL) {
    // agar pada bagian PPDB / Pendaftaran tidak tampil tombol REGISTRASI PPDB
    $this->data['mendaftar'] = TRUE;

    if(!$tahun) $tahun = date('Y', time());

    $data['tahun_satu'] = $tahun;
    $data['tahun_dua'] = $tahun + 1;

    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');

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
        'NIK' => $this->input->post('NIK_siswa'),
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
        'memiliki_penyakit' => $this->input->post('penyakit'),
        'alamat' => $this->input->post('alamat'),
        'tinggal_dengan' => $this->input->post('tinggal_dengan'),
        'nomor_hp' => $this->input->post('nomor_hp'),
        'status' => 'terdaftar',
        'tahun_ajaran' => $this->input->post('tahun_ajaran'),
        'tanggal_mendaftar' => date('Y-m-d', time())
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
        'id' => '',
        'id_siswa' => NULL,
        'masuk_sebagai' => $this->input->post('masuk_sebagai'),
        'asal_siswa' => $this->input->post('asal_siswa'),
        'nama_sekolah' => $this->input->post('nama_sekolah'),
        'nomor_tahun_SK' => $this->input->post('nomor_tahun_sk'),
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

    $data['ppdb'] = $this->ppdb->ambil_informasi($tahun);

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/ppdb/info', $data);
    $this->load->view('template/footer');
  }

  public function ppdb_edaran($tahun) {
    $data['tahun_satu'] = $tahun;
    $data['tahun_dua'] = $tahun + 1;

    $data['ppdb'] = $this->ppdb->ambil_edaran($tahun);

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/ppdb/edaran', $data);
    $this->load->view('template/footer');
  }

  public function dokumentasi() {
    $data['dokumentasi'] = $this->dokumentasi->tampilkan_dokumentasi();

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/semua', $data);
    $this->load->view('template/footer');
  }

  public function single_dokumentasi($id) {
    $data['dokumentasi'] = $this->dokumentasi->tampilkan_dokumentasi($id);

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/single', $data);
    $this->load->view('template/footer');
  }

  public function kurikulum() {
    $data['kurikulum'] = $this->akademik->tampilkan_kurikulum();

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/kurikulum', $data);
    $this->load->view('template/footer');
  }

  public function kalender() {
    $data['kalender'] = $this->akademik->tampilkan_kalender();

    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/kalender', $data);
    $this->load->view('template/footer');
  }
}