<?php
class Jurubeli_model extends CI_Model{

  function get_all_jb() 
  {
    $this->datatables->select('kd_jurubeli,nama_jurubeli');
    $this->datatables->from('jurubeli');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_jurubeli="$1" data-nama_jurubeli="$2"><i class="fa fa-edit"></i> &nbsp EDIT</a>
	<a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-kd_jurubeli="$1"><i class="fas fa-trash"></i> &nbsp Hapus</a>
    ',
    'kd_jurubeli,nama_jurubeli');
        
    return $this->datatables->generate();
  }

}

   