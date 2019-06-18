<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('Datatables');
    $this->load->model('User_model');
    $this->load->model('Menus');
  }
  function index(){
    $session_data=$this->session->userdata('logged_in');
    $akses=$session_data['hak_akses'];
    $data['menus'] = $this->Menus->getMenuUser($akses);
    $this->load->view('user_view',$data);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->User_model->get_all_jb();
  }


  function simpan(){ //function simpan data
    $data=array(
      'no_petugas'      => $this->input->post('Nomer'),
      'nama_petugas'    => $this->input->post('Nama'),
      'username'		=> $this->input->post('Username'),
      'password'		=> $this->input->post('Password'),
      'hak_akses'		=> $this->input->post('hak_akses'),
    );
    $this->db->insert('petugas', $data);
    redirect('User');
  }

  function update(){ //function update data
    $Nomer=$this->input->post('Nomer');
    $data=array(
      // 'kd_jurubeli'     => $this->input->post('Kode')
      'nama_petugas'     => $this->input->post('Nama'),
      'username'		 => $this->input->post('Username'),
      'password'		 => $this->input->post('Password'),
      'hak_akses'		 => $this->input->post('hak_akses'),
    );
    print_r($data);
    die;

    $this->db->where('no_petugas',$Nomer);
    $this->db->update('petugas', $data);
    redirect('User');
  }

  function delete(){ //function hapus data
    $nomer=$this->input->post('Nomer');
    $this->db->where('no_petugas',$Nomer);
    $this->db->delete('petugas', $data);
    redirect('User');
  }

}



	// public function index()
	// {
	// 	$this->load->helper('url','form');
	// 	$this->load->model('User_model');
	// 	$data['member_list'] = $this->member_model->getDataMember();
	// 	$this->load->view('user_view');
	// }


	// public function submit()
	// {
	// 	$this->load->helper('url', 'form');
	// 	$this->load->model('User_model');
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('no_petugas', 'No_petugas', 'trim|required');
	// 	$this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'trim|required');
	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	// 	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	// 	$this->form_validation->set_rules('hak_akses', 'Hak_akses', 'trim|required');

	// 	if ($this->form_validation->run()==FALSE)
	// 		{
	// 			echo "Sukses menambahkan data !!!";
	// 			$this->load->view('tambah_member_view');
	// 		}
		
	// 	else
	// 		{
	// 			$this->member_model->insertMember();
	// 			$this->load->view('tambah_member_data');

	// 		}
	// }
	// 	//echo anchor('url', 'linkname');

	// public function edit($no_petugas)
	// {
	// 	$this->load->helper('url', 'form');
	// 	$this->load->library('form_validation');
	// 	$this->load->model('User_model');
	// 	$data['User'] = $this->User_model->getMember($no_petugas);
	// 	$this->form_validation->set_rules('no_petugas', 'No_petugas', 'trim|required');
	// 	$this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'trim|required');
	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	// 	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	// 	$this->form_validation->set_rules('hak_akses', 'Hak_akses', 'trim|required');


	// 	if ($this->form_validation->run()==FALSE)
	// 	{
	// 		$this->load->view('User_view',$data);
	// 	}
	// 	else
	// 	{
	// 		$this->member_model->edit_no($no_petugas);
	// 		$this->load->view('form_user');
	// 	}
	// }

	// public function hapus($no_petugas)
	// {
	// 	$this->load->helper('url');
	// 	$this->load->model('User_model');
	// 	$this->model->delete($id);
	// 	redirect('User');
	// };

/* End of file user.php */
/* Location: .//C/xampp/htdocs/ElaAdmin-master/user.php */
?>