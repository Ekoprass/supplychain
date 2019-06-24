<?php
class Vendor extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('Vendor_model');
    $this->load->model('Menus');
    if (!$this->session->userdata('logged_in')) {
      redirect('login','refresh');
    }
  }
  function index(){
    $session_data=$this->session->userdata('logged_in');
    $akses=$session_data['hak_akses'];
    $data['menus'] = $this->Menus->getMenuUser($akses);
    $this->load->view('Vendor_view',$data);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->Vendor_model->get_all_vm();
  }


  function simpan(){ //function simpan data
     $config = array(
            array(
                    'field' => 'Kode',
                    'label' => 'Kode Vendori',
                    'rules' => 'trim|required|is_unique[vendor.kd_vendor]',
                    'errors'=> array('is_unique' =>'Kode Vendor Telah Terdaftar','required'=>'Form Kode Vendor Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama Vendor',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Form Nama Vendor Tidak Boleh Kosong' )
            )
    );
    $this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
    $data=array(
      'kd_vendor'     => $this->input->post('Kode'),
      'nama_vendor'     => $this->input->post('Nama'),
    );
    $this->db->insert('vendor', $data);
        echo json_encode(['success'=>'Data Berhasil Ditambahkan']);

    redirect('vendor','refresh');
    
  }}

  function update(){ //function update data
    $kode=$this->input->post('Kode');
    $data=array(
      // 'kd_vendor'     => $this->input->post('Kode')
      'nama_vendor'     => $this->input->post('Nama')
    );
    $this->db->where('kd_vendor',$kode);
    $this->db->update('vendor', $data);
    redirect('vendor');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('Kode');
    $this->db->where('kd_vendor',$kode);
    $this->db->delete('vendor');
    redirect('vendor');
  }

}
