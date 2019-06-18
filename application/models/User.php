<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Model {
	

		public function Login($username,$password)
		{
			$this->db->select('no_petugas,username,password,hak_akses,nama_petugas');
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
		
	
	}
	
	/* End of file User.php */
	/* Location: ./application/models/User.php */
 ?>