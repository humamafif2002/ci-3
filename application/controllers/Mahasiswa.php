<?php

class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
    $data['judul'] = 'Data Mahasiswa';
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function tambah()
  {
    $data['judul'] = 'Form Mahasiswa';
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->tambahDataMahsiswa();
      $this->session->set_flashdata('flash', 'DiTambahkan');
      redirect('mahasiswa/index');
    }
  }

  public function hapus($id)
  {
    $this->Mahasiswa_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('hapus', 'DiHapus');
    redirect('mahasiswa/index');
  }
}
