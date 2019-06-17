<?php
class Proyek extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('Proyek_model');
    $this->load->model('Menus');
  }
  function index(){
    $session_data=$this->session->userdata('logged_in');
    $akses=$session_data['hak_akses'];
    $data['menus'] = $this->Menus->getMenuUser($akses);
    $this->load->view('Proyek_view',$data);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->Proyek_model->get_all_md();
  }


  function simpan(){ //function simpan data
    $data=array(
      'kd_proyek'     => $this->input->post('Kode'),
      'nama_proyek'     => $this->input->post('Nama'),
    );
    $this->db->insert('proyek', $data);
    redirect('proyek');
  }

  function update(){ //function update data
    $kode=$this->input->post('Kode');
    $data=array(
      // 'kd_proyek'     => $this->input->post('Kode')
      'nama_proyek'     => $this->input->post('Nama')
    );
    $this->db->where('kd_proyek',$kode);
    $this->db->update('proyek', $data);
    redirect('proyek');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('Kode');
    $this->db->where('kd_proyek',$kode);
    $this->db->delete('proyek');
    redirect('proyek');
  }

}