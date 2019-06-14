<?php
class Rak extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('Rak_model');
  }
  function index(){
    $this->load->view('Rak_view');
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->Rak_model->get_all_rak();
  }


  function simpan(){ //function simpan data
    $data=array(
      'no_rak'     => $this->input->post('Kode'),
      'rak_ke'     => $this->input->post('Nama'),
    );
    $this->db->insert('rak_ke', $data);
    redirect('Rak');
  }

  function update(){ //function update data
    $kode=$this->input->post('Kode');
    $data=array(
      // 'kd_jurubeli'     => $this->input->post('Kode')
      'rak_ke'     => $this->input->post('Nama')
    );
    $this->db->where('no_rak',$kode);
    $this->db->update('rak_ke', $data);
    redirect('Rak');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('Kode');
    $this->db->where('no_rak',$kode);
    $this->db->delete('rak_ke');
    redirect('Rak');
  }

}
