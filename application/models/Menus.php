<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Menus extends CI_Model {

		public function getMenuUser($akses)
			{
				if ($akses==1) {
					$this->db->where('users', $akses);
					$menu = $this->db->get('menus');
					return $menu->result_array();	
				}elseif ($akses==2)  {
					$query=$this->db->get('menus');
					return $query->result_array();
				}
							
			}	
	
	}
	
	/* End of file Menus.php */
	/* Location: ./application/models/Menus.php */
 ?>