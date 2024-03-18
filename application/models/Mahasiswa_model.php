<?php
class Mahasiswa_model extends CI_Model
{

  public function getAllMahasiswa()
  {

    return $this->db->get('mahasiswa')->result_array();
    // $query = $this->db->get('mahasiswa');
    // return $query->result_array();
  }


  public function tambahDataMahsiswa()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nim' => $this->input->post('nim', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true)
    ];

    $this->db->insert('mahasiswa', $data);
  }

  public function hapusDataMahasiswa($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('mahasiswa');
  }
}
