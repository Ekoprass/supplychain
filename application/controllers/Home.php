<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
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
		
		$this->load->view('welcome_message',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

 ?>