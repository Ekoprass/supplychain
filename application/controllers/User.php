<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('User_model');
		$this->load->view('User', $data);
	}


	public function submit()
	{
		$this->load->helper('url', 'form');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_petugas', 'No_petugas', 'trim|required');
		$this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('hak_akses', 'Hak_akses', 'trim|required');

		if ($this->form_validation->run()==FALSE)
			{
				echo "Sukses menambahkan data !!!";
				$this->load->view('tambah_member_view');
			}
		
		else
			{
				$this->member_model->insertMember();
				$this->load->view('tambah_member_data');

			}
	}
		//echo anchor('url', 'linkname');

	public function edit($no_petugas)
	{
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('User_model');
		$data['User'] = $this->User_model->getMember($no_petugas);
		$this->form_validation->set_rules('no_petugas', 'No_petugas', 'trim|required');
		$this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('hak_akses', 'Hak_akses', 'trim|required');


		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('User_view',$data);
		}
		else
		{
			$this->member_model->edit_no($no_petugas);
			$this->load->view('form_user');
		}
	}

	public function hapus($no_petugas)
	{
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->model->delete($id);
		redirect('User');
	};
}

/* End of file user.php */
/* Location: .//C/xampp/htdocs/ElaAdmin-master/user.php */
?>