<?php
class Rak_model extends CI_Model{

  function get_all_rak() 
  {
    $this->datatables->select('kd_rak,nama_rak');
    $this->datatables->from('rak_ke');
    $this->datatables->where('kd_rak !=','0');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_rak="$1" data-nama_rak="$2"><i class="fa fa-edit"></i> &nbsp EDIT</a>
     <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-kd_rak="$1"><i class="fas fa-trash"></i> &nbsp Hapus</a>',
    'kd_rak,nama_rak');
        
    return $this->datatables->generate();
  }

}

   