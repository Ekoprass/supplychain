<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->library('datatables');
		$this->load->model('Menus');
		$this->load->model('Arsip_model');
	}
	public function index()
	{
		 $session_data=$this->session->userdata('logged_in');
	    $akses=$session_data['hak_akses'];
	    $data['menus'] = $this->Menus->getMenuUser($akses);

	    $data['jurubeli']=$this->Arsip_model->get_all_jb();
	    $data['proyek']=$this->Arsip_model->get_all_py();
	    $data['vendor']=$this->Arsip_model->get_all_vn();
		$this->load->view('arsip',$data);
	}

	 function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->Arsip_model->get_all();
  }

  public function Data()
	{
	   	$session_data=$this->session->userdata('logged_in');
	    $akses=$session_data['hak_akses']; 
	    $data['menus'] = $this->Menus->getMenuUser($akses);
	    $data['jurubeli']=$this->Arsip_model->get_all_jb();
	    $data['proyek']=$this->Arsip_model->get_all_py();
	    $data['vendor']=$this->Arsip_model->get_all_vn();
		$this->load->view('dataarsip_view',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('no_dokumen', 'Nomor Dokumen', 'trim|required|is_unique[arsip_dokumen.no_dokumen]');
		$this->form_validation->set_rules('no_po', 'Nomor Purchase Order', 'trim|required|is_unique[arsip_dokumen.no_po]');
		if ($this->form_validation->run() === FALSE) {
			$this->form_validation->set_message('is_unique', 'no_dokumen sudah ada.');
			$this->form_validation->set_message('is_unique', 'Nomor PO Sudah Terdaftar');
			$session_data=$this->session->userdata('logged_in');
		    $akses=$session_data['hak_akses'];
		    $data['menus'] = $this->Menus->getMenuUser($akses);

		    $data['jurubeli']=$this->Arsip_model->get_all_jb();
		    $data['proyek']=$this->Arsip_model->get_all_py();
		    $data['vendor']=$this->Arsip_model->get_all_vn();
			$this->load->view('arsip',$data);
		}else{
			$config['upload_path'] = realpath('./assets/dokument/');
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '5000';
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('dokumen')){
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
			}else {
				date_default_timezone_set('Asia/Jakarta');
				$d=strtotime($this->input->post('tgl_po'));
				$session_data=$this->session->userdata('logged_in');
				$data=array(
			      'no_dokumen'      	=> $this->input->post('no_dokumen'),
			      'no_po'    			=> $this->input->post('no_po'),
			      'tgl_po'				=> date("Y-m-d",$d),
			      'deskripsi'			=> $this->input->post('deskripsi'),
			      'jurubeli'			=> $this->input->post('jurubeli'),
			      'proyek'				=> $this->input->post('proyek'),
			      'vendor'				=> $this->input->post('vendor'),
			      'rak_ke'					=> $this->input->post('rak'),
			      'tgl_entry'			=> date("Y-m-d h:i:s"),
			      'petugas'				=> $session_data['nama_petugas'],
			      'status_dokumen'		=> $this->input->post('status'),
			      'dokumen'				=> $this ->upload->data('file_name'),
			    );
				 $this->db->insert('arsip_dokumen', $data);
				  redirect('Arsip/Data');
			}
			}
	}
	 		


}

/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */