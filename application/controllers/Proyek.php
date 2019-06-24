<?php
class Proyek extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('Proyek_model');
    $this->load->model('Menus');
    if (!$this->session->userdata('logged_in')) {
      redirect('login','refresh');
    }
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
     $config = array(
           array(
                    'field' => 'Kode',
                    'label' => 'Kode Proyek',
                    'rules' => 'trim|required|is_unique[proyek.kd_proyek]',
                    'errors'=> array('is_unique' =>'Kode Proyek Telah Terdaftar','required'=>'Form Kode Proyek Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama Proyek',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Form Nama Proyek Tidak Boleh Kosong' )
            )
    );
    $this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
    $data=array(
      'kd_proyek'     => $this->input->post('Kode'),
      'nama_proyek'     => $this->input->post('Nama'),
    );
    $this->db->insert('proyek', $data);
        echo json_encode(['success'=>'Data Berhasil Ditambahkan']);

    redirect('proyek','refresh');
    
  }}

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
