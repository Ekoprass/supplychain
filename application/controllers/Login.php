<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('User_model');

		}
		public function index()
		{
			$this->load->view('login_view.php');
		}

		public function CekLogin($value='')
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');	
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_CekDB');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('login_view');
			} else {
				$session_data=$this->session->userdata('logged_in');
				$akses=$session_data['hak_akses'];
				redirect('Home','refresh');
				
			}
		}
		
		public function CekDB($password)
		{
			$username=$this->input->post('username');
				$result =$this->User_model->login($username,$password);
				if ($result) {
					$sess_array= array();
					foreach ($result as $row) {
						$sess_array = array(
							'id_petugas'=>$row->no_petugas,
							'username'=>$row->username,
							'hak_akses'=>$row->hak_akses,
							'nama_petugas'=>$row->nama_petugas
						);
						
						$this->session->set_userdata('logged_in', $sess_array );
					}
					return true;
				}else{
					$this->form_validation->set_message('CekDB',"Login Gagal Username dan Password tidak valid");
					return false;
				}
			
		}

		public function Logout()
		{
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
	}
	
	/* End of file Login.php */
	/* Location: ./application/controllers/Login.php */
 ?>