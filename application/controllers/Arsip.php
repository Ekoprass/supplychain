<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->library('datatables');
		$this->load->model('Menus');
		$this->load->model('Arsip_model');
		if (!$this->session->userdata('logged_in')) {
			redirect('login','refresh');
		}
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
		$config = array(
		        array(
		                'field' => 'no_dokumen',
		                'label' => 'Nomor Dokumen',
		                'rules' => 'is_unique[arsip_dokumen.no_dokumen]',
		                'errors'=> array('is_unique' =>'Nomor Dokumen Telah Terdaftar')
		        ),
		        array(
		                'field' => 'no_po',
		                'label' => 'Nomor Purchase Order',
		                'rules' => 'is_unique[arsip_dokumen.no_po]',
		                'errors'=> array('is_unique'=>'Nomor Purchase Order Telah Terdaftar')
		                ),
		        );
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
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

	function pdf($item)
    {
    
        fopen("base_url()/assets/dokument/$item", "");

    }
	 		


}

/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */