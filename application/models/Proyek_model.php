<?php
class Proyek_model extends CI_Model{

  function get_all_md() 
  {
    $this->datatables->select('kd_proyek,nama_proyek');
    $this->datatables->from('proyek');
    $this->datatables->add_column('view',
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_proyek="$1" data-nama_proyek="$2">Edit &nbsp <i class="fa fa-edit"></a>',
    'kd_proyek,nama_poyek');
        
    return $this->datatables->generate();
  }

}

   