<?php
class Jurubeli_model extends CI_Model{

  function get_all_jb() 
  {
    $this->datatables->select('kd_jurubeli,nama_jurubeli');
    $this->datatables->from('jurubeli');
    $this->datatables->add_column('view',
<<<<<<< HEAD
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_jurubeli="$1" data-nama_jurubeli="$2">Edit &nbsp <i class="fa fa-edit"></a>',
=======
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_jurubeli="$1" data-nama_jurubeli="$2">EDIT &nbsp <i class="fa fa-edit"></a>',
>>>>>>> 75545f97fa86d1013c34a986b409c027f64f1327
    'kd_jurubeli,nama_jurubeli');
        
    return $this->datatables->generate();
  }

}

   