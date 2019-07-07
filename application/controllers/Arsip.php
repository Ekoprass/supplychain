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


	    $this->db->select("no_dokumen");
		$this->db->from("arsip_dokumen");
		$this->db->limit(1);
		$this->db->order_by('no_dokumen',"DESC");
		$query = $this->db->get();
		$result = $query->result();
		if ($result==null) {
			$th=date("y");
			$n="0000";
			$n2 = str_pad($n + 1, 4, 0, STR_PAD_LEFT);
			$no_dokumen=$th."".$n2;
		}
		else{
		foreach ($result as $id) {				
			$th=date("y");
			$n=$id->no_dokumen;
			$th_db=substr($n, 0,2);
			if ($th>$th_db) {
				$n="0000";	
			}
			$n2 = str_pad($n + 1, 4, 0, STR_PAD_LEFT);
			$no_dokumen=$n2;
		}
		}
		$data['no_dokumen']=$no_dokumen;

	    $data['rak_ke']=$this->Arsip_model->get_all_rak();
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
		    $data['rak_ke']=$this->Arsip_model->get_all_rak();
			$this->load->view('dataarsip_view',$data);
		}

	public function tambah()
	{
		$config = array(
		        array(
		                'field' => 'no_surat',
		                'label' => 'Nomor Surat',
		                'rules' => 'is_unique[arsip_dokumen.no_surat]',
		                'errors'=> array('is_unique' =>'Nomor Surat Telah Terdaftar')
		            ),
		        array(
		                'field' => 'jurubeli',
		                'label' => 'Kode Juru Beli',
		                'rules' => 'required',
		                'errors'=> array('required' =>'Kode Tidak Boleh Kosong')
	            ),array(
	                'field' => 'proyek',
	                'label' => 'Nomor Surat',
	                'rules' => 'required',
	                'errors'=> array('required' =>'Kode Tidak Boleh Kosong')
	            ),array(
	                'field' => 'vendor',
	                'label' => 'Nomor Surat',
	                'rules' => 'required',
	                'errors'=> array('required' =>'Kode Tidak Boleh Kosong')
	            ),array(
	                'field' => 'rak',
	                'label' => 'Nomor Surat',
	                'rules' => 'required',
	                'errors'=> array('required' =>'Kode Tidak Boleh Kosong')
	            )
		        );
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
			$session_data=$this->session->userdata('logged_in');
		    $akses=$session_data['hak_akses'];
		    $data['menus'] = $this->Menus->getMenuUser($akses);

		    $data['jurubeli']=$this->Arsip_model->get_all_jb();
		    $data['proyek']=$this->Arsip_model->get_all_py();
		    $data['vendor']=$this->Arsip_model->get_all_vn();
		    $data['rak_ke']=$this->Arsip_model->get_all_rak();
			$this->load->view('arsip',$data);
		}else{
			$config['upload_path'] = realpath('./assets/dokument/');
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '11000';
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('dokumen')){
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
			}else {
				date_default_timezone_set('Asia/Jakarta');
				$d=strtotime($this->input->post('tgl_po'));
				$session_data=$this->session->userdata('logged_in');
				
				if (!$this->input->post('rak_ke')) {
					$rak="0";
				}else{
					$rak=$this->input->post('rak_ke');
				}
				  	$this->db->select("no_dokumen");
					$this->db->from("arsip_dokumen");
					$this->db->limit(1);
					$this->db->order_by('no_dokumen',"DESC");
					$query = $this->db->get();
					$result = $query->result();
					foreach ($result as $id) {
						$n2 = str_pad($id->no_dokumen + 1, 4, 0, STR_PAD_LEFT);
					}
					
				$data=array(
			      'no_dokumen'      	=> $n2,
			      'no_surat'	      	=> $this->input->post('no_surat'),
			      'no_po'    			=> $this->input->post('no_po'),
			      'tgl_po'				=> date("Y-m-d",$d),
			      'deskripsi'			=> $this->input->post('deskripsi'),
			      'jurubeli'			=> $this->input->post('jurubeli'),
			      'proyek'				=> $this->input->post('proyek'),
			      'vendor'				=> $this->input->post('vendor'),
			      'rak'					=> $rak,
			      'tgl_entry'			=> date("Y-m-d h:i:s"),
			      'petugas'				=> $session_data['id_petugas'],
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
	
	function update()
	{

			$config['upload_path'] = realpath('./assets/dokument/');
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '11000';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('dokumen')){
			$dokumen=$this->upload->data('file_name');
				
				// $error = array('error' => $this->upload->display_errors());
				// echo $error['error'];
			}else{
				$dokumen=$this->input->post('dokumena');

			}
			if ($this->input->post('jurubeli')==null) {
				$jurubeli=$this->input->post('jb');
			}else {
				$jurubeli=$this->input->post('jurubeli');
			}	
			if ($this->input->post('proyek')==null) {
				$proyek=$this->input->post('pk');
			}else {
				$proyek=$this->input->post('proyek');
			}	
			if ($this->input->post('vendor')==null) {
				$vendor=$this->input->post('vn');
			}else {
				$vendor=$this->input->post('vendor');
			}if ($this->input->post('rak')==null) {
				$rak=$this->input->post('rk');
			}else {
				$rak=$this->input->post('rak');
			}

			date_default_timezone_set('Asia/Jakarta');
			$d=strtotime($this->input->post('tgl_po'));
			$kode=$this->input->post('no_dokumen');
			$data=array(
		      'no_dokumen'      	=> $kode,
			  'no_surat'	      	=> $this->input->post('no_surat'),
		      'no_po'    			=> $this->input->post('no_po'),
		      'tgl_po'				=> date("Y-m-d",$d),
		      'deskripsi'			=> $this->input->post('deskripsi'),
		      'jurubeli'			=> $jurubeli,
		      'proyek'				=> $proyek,
		      'vendor'				=> $vendor,
		      'rak'					=> $rak,
		      'tgl_entry'			=> $this->input->post('tgl_entry'),
		      'petugas'				=> $this->input->post('petugas'),
		      'status_dokumen'		=> $this->input->post('status'),
		      'dokumen'				=> $dokumen
		    );	
    		$this->db->where('no_dokumen',$kode);
			$this->db->update('arsip_dokumen', $data);
			  redirect('Arsip/Data');
			
	}


}

/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */