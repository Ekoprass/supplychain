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
		$this->load->view('dataarsip_view',$data);
	}

}

/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */