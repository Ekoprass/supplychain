<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_model extends CI_Model {

	 function get_all() 
  {
    $this->datatables->select('no_dokumen,no_po,tgl_po,deskripsi,jurubeli,proyek,vendor,jurubeli.nama_jurubeli as nm_jurubeli,proyek.nama_proyek as nm_proyek,vendor.nama_vendor as nm_vendor,rak_ke.kd_rak as no_rak,petugas.nama_petugas as petugas,petugas.no_petugas as no_petugas,petugas.hak_akses as akses_petugas, tgl_entry, dokumen, status_dokumen, no_surat, rak_ke.nama_rak as rak');
    $this->datatables->from('arsip_dokumen');
    $this->datatables->join('jurubeli', 'arsip_dokumen.jurubeli = jurubeli.kd_jurubeli');
    $this->datatables->join('proyek', 'arsip_dokumen.proyek = proyek.kd_proyek');
    $this->datatables->join('vendor', 'arsip_dokumen.vendor = vendor.kd_vendor');
    $this->datatables->join('petugas', 'arsip_dokumen.petugas = petugas.no_petugas');
    $this->datatables->join('rak_ke', 'arsip_dokumen.rak = rak_ke.kd_rak');
    // $this->datatables->add_column('view',
    // '<a href="javascript:void(0);" class="edit_record btn btn-info btn-s" data-no_dokumen="$1" data-no_po="$2" data-tgl_po="$3" data-deskripsi="$4" data-jurubeli="$5" data-proyek="$6" data-vendor="$7" data-rak_ke="$8" data-status_dokumen="$9"><i class="fa fa-edit"></i> EDIT</a>',
    // 'no_dokumen,no_po,tgl_po,deskripsi,jurubeli,proyek,vendor,rak_ke,status_dokumen,');

    $this->datatables->add_column('pdf','  <a href="javascript:void(0);" class="view_pdf btn btn-primary btn-md" data-dokumen="$1"><i style="font-size:20px" class ="fas fa-file-pdf"></i>&nbsp PDF</a>','dokumen');
        
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
    $this->db->select('kd_rak,nama_rak');
    $this->db->where('kd_rak !=', 0);
    $get=$this->db->get('rak_ke');
    return $get->result_array();
  }
// <button><i class="fa fa-edit"></button>
}

/* End of file Arsip_model.php */
/* Location: ./application/models/Arsip_model.php */
 ?>