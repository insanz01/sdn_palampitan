<?php

class Landing extends CI_Controller {
  private $data = NULL;

  public function __construct() {
    parent::__construct();
    
    $this->data['judul_aplikasi'] = "SEKOLAH DASAR NEGERI PALAMPITAN";
  }

  public function index() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/main');
    $this->load->view('template/footer');
  }

  public function ppdb() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/ppdb/daftar');
    $this->load->view('template/footer');
  }

  public function dokumentasi() {
    $this->load->view('template/header', $this->data);
    $this->load->view('template/topbar');
    $this->load->view('template/navbar');
    $this->load->view('app/dokumentasi/semua');
    $this->load->view('template/footer');
  }
}