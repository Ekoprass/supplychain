<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('Menus');
	
}
	
	public function index()
	{
		 
		$session_data=$this->session->userdata('logged_in');
		// $id_user=$session_data['id_user'];
		// $data['akses']=$session_data['hak_akses'];
		$akses=$session_data['hak_akses'];
		// $data['usr']="user";
		// $data['user']=$this->user_model->getDataUserByID($id_user);
		$data['menus'] = $this->Menus->getMenuUser($akses);
		
		$this->load->view('dashboard',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

 ?>