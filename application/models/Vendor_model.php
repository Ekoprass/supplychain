<?php
class Vendor_model extends CI_Model{

  function get_all_vm() 
  {
    $this->datatables->select('kd_vendor,nama_vendor');
    $this->datatables->from('vendor');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_vendor="$1" data-nama_vendor="$2"><i class="fa fa-edit"></i> &nbsp EDIT </a>
    <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-kd_vendor="$1"><i class="fas fa-trash"></i> &nbsp Hapus</a>',
    'kd_vendor,nama_vendor');
        
    return $this->datatables->generate();
  }

}

   