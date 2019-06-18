<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_model extends CI_Model {

	 function get_all() 
  {
    $this->datatables->select('no_dokumen,no_po,tgl_po,deskripsi,jurubeli,proyek,vendor,rak_ke,petugas,tgl_entry,dokumen,status_dokumen');
    $this->datatables->from('arsip_dokumen');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-info btn-s" data-no_dokumen="$1" data-no_po="$2" data-tgl_po="$3" data-deskripsi="$4" data-jurubeli="$5" data-proyek="$6" data-vendor="$7" data-rak_ke="$8" data-petugas="$9" data-tgl_entry="$10" data-dokumen="$11" data-status_dokumen="$12">Edit <i class="fa fa-edit"></a>',
    'no_dokumen,no_po,tgl_po,deskripsi,jurubeli,proyek,vendor,rak_ke,petugas,tgl_entry,dokumen,status_dokumen');
        
    return $this->datatables->generate();
  }

  function get_all_jb()
  {
  	$this->db->select('kd_jurubeli,nama_jurubeli');
    $get=$this->db->get('jurubeli');
   	return $get->result_array();
  }

  function get_all_py()
  {
  	$this->db->select('kd_proyek,nama_proyek');
    $get=$this->db->get('proyek');
    return $get->result_array();
  }

  function get_all_vn()
  {
  	$this->db->select('kd_vendor,nama_vendor');
    $get=$this->db->get('vendor');
    return $get->result_array();
  }

  function get_all_rak()
  {
  	$this->db->select('no_rak,rak_ke');
    $get=$this->db->get('rak_ke');
    return $get->result_array();
  }
}

/* End of file Arsip_model.php */
/* Location: ./application/models/Arsip_model.php */
 ?>