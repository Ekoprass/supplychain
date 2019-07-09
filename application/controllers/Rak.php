<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Rak extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->library('Datatables');
		    $this->load->model('Rak_model');
		    $this->load->model('Menus');
		    if (!$this->session->userdata('logged_in')) {
		      redirect('login','refresh');
		  }
		}
		public function index()
		{
			$session_data=$this->session->userdata('logged_in');
		    $akses=$session_data['hak_akses'];
		    $data['menus'] = $this->Menus->getMenuUser($akses);
			$this->load->view('rak_view', $data);
		}

		function get_guest_json() { //data data produk by JSON object
	    	header('Content-Type: application/json');
	    	echo $this->Rak_model->get_all_rak();
  		}

  		function simpan(){ //function simpan data
		    $config = array(
		            array(
		                    'field' => 'Kode',
		                    'label' => 'Kode Rak',
		                    'rules' => 'trim|required|is_unique[rak_ke.kd_rak]',
		                    'errors'=> array('is_unique' =>'Kode Rak Telah Terdaftar','required'=>'Kode Rak Tidak Boleh Kosong' )
		            ),
		            array(
		                    'field' => 'Nama',
		                    'label' => 'Nama Rak',
		                    'rules' => 'trim|required',
		                    'errors'=> array('required'=>'Nama Rak Tidak Boleh Kosong' )
		            )
		    );
		    $this->form_validation->set_rules($config);
		    if ($this->form_validation->run() === FALSE) {
		        $errors = validation_errors();
		        echo json_encode(['error'=>$errors]);
		    }else{
		    $data=array(
		      'kd_rak'     => $this->input->post('Kode'),
		      'nama_rak'     => $this->input->post('Nama'),
		    );
		    $this->db->insert('rak_ke', $data);
		        echo json_encode(['success'=>'Data Rak Berhasil Ditambahkan']);

		    redirect('rak','refresh');
		}}

		function update(){ //function update data
		    $kode=$this->input->post('Kode');
		    $data=array(
		      // 'kd_jurubeli'     => $this->input->post('Kode')
		      'nama_rak'     => $this->input->post('Nama')
		    );
		    $this->db->where('kd_rak',$kode);
		    $this->db->update('rak_ke', $data);
		    redirect('rak');
		  }

		  function delete(){ //function hapus data
		    $kode=$this->input->post('kd_rak');
		    $this->db->where('rak', $kode);
		    $query=$this->db->get('arsip_dokumen');
		    if ($query->num_rows()>=1) {
		        $errors = "Delete Gagal! \nKode Rak Terelasi Dengan Data Arsip";
		        echo json_encode(['error'=>$errors]);
		    }else{
		      $this->db->where('kd_rak',$kode);
		      $this->db->delete('rak_ke');
		      echo json_encode(['success'=>'Data Rak Berhasil Dihapus']);
		      redirect('rak','refresh');
		    }
		    
		  }

	
	}
	
	/* End of file Rak.php */
	/* Location: ./application/controllers/Rak.php */
 ?>