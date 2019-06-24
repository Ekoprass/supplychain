<?php
class Jurubeli extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('Datatables');
    $this->load->model('Jurubeli_model');
    $this->load->model('Menus');
    if (!$this->session->userdata('logged_in')) {
      redirect('login','refresh');
    }
  }
  function index(){
    $session_data=$this->session->userdata('logged_in');
    $akses=$session_data['hak_akses'];
    $data['menus'] = $this->Menus->getMenuUser($akses);
    $this->load->view('jurubeli_view',$data);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->Jurubeli_model->get_all_jb();
  }


  function simpan(){ //function simpan data
    $config = array(
            array(
                    'field' => 'Kode',
                    'label' => 'Kode Juru Beli',
                    'rules' => 'is_unique[jurubeli.kd_jurubeli]',
                    'errors'=> array('is_unique' =>'Kode Juru Beli Telah Terdaftar')
            )
    );
    $this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
         $errors['validation_error'] = validation_errors();
         json_encode($errors);
         redirect('jurubeli','refresh');
    }else{
    $data=array(
      'kd_jurubeli'     => $this->input->post('Kode'),
      'nama_jurubeli'     => $this->input->post('Nama'),
    );
    $this->db->insert('jurubeli', $data);
    redirect('jurubeli');
  }}

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
