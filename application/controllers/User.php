<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('Datatables');
    $this->load->model('User_model');
    $this->load->model('Menus');
    if (!$this->session->userdata('logged_in')) {
			redirect('login','refresh');
		}
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
  	 $config = array(
           array(
                    'field' => 'Nomer',
                    'label' => 'Nomer Petugas',
                    'rules' => 'trim|required|is_unique[petugas.no_petugas]',
                    'errors'=> array('is_unique' =>'Nomer petugas Telah Terdaftar','required'=>'Nomer Petugas Tidak Boleh Kosong' )
            ),
            array(
                    'field' => 'Nama',
                    'label' => 'Nama Petugas',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Nama Petugas Tidak Boleh Kosong' )
            ),
             array(
                    'field' => 'Username',
                    'label' => 'Username Petugas',
                    'rules' => 'trim|required',
                    'errors'=> array('required' =>'Username Tidak Boleh Kosong')
            ),
            array(
                    'field' => 'Password',
                    'label' => 'Password',
                    'rules' => 'trim|required',
                    'errors'=> array('required'=>'Password Tidak Boleh Kosong' )
            ),
            // array(
            //         'field' => 'hak_akses',
            //         'label' => 'hak_akses',
            //         'rules' => 'trim|required',
            //         'errors'=> array('required'=>'Hak Akses Tidak Boleh Kosong' )
            // )
    );
    
  	$this->form_validation->set_rules($config);
    if ($this->form_validation->run() === FALSE) {
        $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
    }else{
   $data=array(
      'no_petugas'      => $this->input->post('Nomer'),
      'nama_petugas'    => $this->input->post('Nama'),
      'username'		=> $this->input->post('Username'),
      'password'		=> mD5($this->input->post('Password')),
      'hak_akses'		=> '1'
    );
    $this->db->insert('petugas', $data);
    	echo json_encode(['success'=>'Data Petugas Berhasil Ditambahkan']);
    redirect('User', 'refresh');
  }}

  function update(){ //function update data
    $Nomer=$this->input->post('Nomer');
    $data=array(
      // 'kd_jurubeli'     => $this->input->post('Kode')
      'nama_petugas'     => $this->input->post('Nama'),
      'username'		 => $this->input->post('Username'),
      'password'		 => mD5($this->input->post('Password')),
      'hak_akses'		 => $this->input->post('hak_akses'),
    );
    $this->db->where('no_petugas',$Nomer);
    $this->db->update('petugas', $data);
    redirect('User');
  }

 function delete(){ //function hapus data
    $Nomer=$this->input->post('Nomer');
    $this->db->where('petugas', $Nomer);
    $query=$this->db->get('arsip_dokumen');
    if ($query->num_rows()==1) {
        $errors = "Delete Gagal! \nNomor Petugas Terelasi Dengan Data Arsip";
        echo json_encode(['error'=>$errors]);
    }else{
      $this->db->where('no_petugas',$Nomer);
      $this->db->delete('petugas');
      echo json_encode(['success'=>'Data Petugas Berhasil Dihapus']);
      redirect('User','refresh');
    }
    
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