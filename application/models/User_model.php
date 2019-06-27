<?php
class User_model extends CI_Model{
	
		public function Login($username,$password)
		{
			$this->db->select('no_petugas,nama_petugas,username,password,hak_akses');
			$this->db->from('petugas');
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query=$this->db->get();
			if ($query->num_rows()==1) {
				return $query->result();
			}else{
				return false;
			}
		}

  function get_all_jb() 
  {
    $this->datatables->select('no_petugas,nama_petugas,username,password,hak_akses');
    $this->datatables->from('petugas');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-no_petugas="$1" data-nama_petugas="$2" data-username="$3" data-password="$4" data-hak_akses="$5"><i class="fa fa-edit"></i> &nbsp EDIT </a>
     <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-no_petugas="$1"><i class="fa fa-trash-o"></i> &nbsp HAPUS</a>', 'no_petugas,nama_petugas,username,password,hak_akses');
        
    return $this->datatables->generate();
  }

}

   