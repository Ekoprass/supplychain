<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class InputArsip extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menus');

	}
		public function index()
		{
			$session_data=$this->session->userdata('logged_in');
			$akses=$session_data['hak_akses'];
			$data['menus'] = $this->Menus->getMenuUser($akses);
			$this->load->view('input_arsip.php',$data);
		}
	
	}
	
	/* End of file InputArsip.php */
	/* Location: ./application/controllers/InputArsip.php */
 ?>