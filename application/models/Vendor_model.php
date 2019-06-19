<?php
class Vendor_model extends CI_Model{

  function get_all_vm() 
  {
    $this->datatables->select('kd_vendor,nama_vendor');
    $this->datatables->from('vendor');
    $this->datatables->add_column('view',
<<<<<<< HEAD
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_vendor="$1" data-nama_vendor="$2">Edit &nbsp <i class="fa fa-edit"></a>',
=======
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_vendor="$1" data-nama_vendor="$2">EDIT &nbsp <i class="fa fa-edit"></a>',
>>>>>>> 75545f97fa86d1013c34a986b409c027f64f1327
    'kd_vendor,nama_vendor');
        
    return $this->datatables->generate();
  }

}

   