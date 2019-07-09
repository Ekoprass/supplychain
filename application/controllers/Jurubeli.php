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
                    'rules' => 'trim|required|is_unique[jurubeli.kd_jurubeli]',
                    'errors'=> array('is_unique' =>'Kode Juru Beli Telah Terdaftar','required'=>'Kode Juru Beli Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama Juru Beli',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Nama Juru Beli Tidak Boleh Kosong' )
            )
    );
    $this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
    $data=array(
      'kd_jurubeli'     => $this->input->post('Kode'),
      'nama_jurubeli'     => $this->input->post('Nama'),
    );
    $this->db->insert('jurubeli', $data);
        echo json_encode(['success'=>'Data Juru Beli Berhasil Ditambahkan']);

    redirect('jurubeli','refresh');
    
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
    $kode=$this->input->post('kd_jurubeli');
    $this->db->where('jurubeli', $kode);
    $query=$this->db->get('arsip_dokumen');
    if ($query->num_rows()>=1) {
        $errors = "Delete Gagal! \nKode Juru Beli Terelasi Dengan Data Arsip";
        echo json_encode(['error'=>$errors]);
    }else{
      $this->db->where('kd_jurubeli',$kode);
      $this->db->delete('jurubeli');
      echo json_encode(['success'=>'Data Juru Beli Berhasil Dihapus']);
      redirect('jurubeli','refresh');
    }
    
  }

}
