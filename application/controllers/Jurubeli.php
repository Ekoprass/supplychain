<?php
class Jurubeli extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('jurubeli_model');
  }
  function index(){
    $this->load->view('jurubeli_view');
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->jurubeli_model->get_all_jb();
  }


  function simpan(){ //function simpan data
    $data=array(
      'kd_jurubeli'     => $this->input->post('Kode'),
      'nama_jurubeli'     => $this->input->post('Nama'),
    );
    $this->db->insert('jurubeli', $data);
    redirect('jurubeli');
  }

  function update(){ //function update data
    $kode=$this->input->post('Kode');
    $data=array(
      // 'kd_jurubeli'     => $this->input->post('Kode')
      'nama_jurubeli'     => $this->input->post('Nama')
    );
    $this->db->where('kd_jurubeli',$kode);
    $this->db->update('jurubeli', $data);
    redirect('jurubeli');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('Kode');
    $this->db->where('kd_jurubeli',$kode);
    $this->db->delete('jurubeli');
    redirect('jurubeli');
  }

}
