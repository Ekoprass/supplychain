<?php
class Proyek_model extends CI_Model{

  function get_all_md() 
  {
    $this->datatables->select('kd_proyek,nama_proyek');
    $this->datatables->from('proyek');
    $this->datatables->add_column('view',
<<<<<<< HEAD
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_proyek="$1" data-nama_proyek="$2">Edit &nbsp <i class="fa fa-edit"></a>',
    'kd_proyek,nama_poyek');
=======
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-kd_proyek="$1" data-nama_proyek="$2">EDIT &nbsp <i class="fa fa-edit"></a>',
    'kd_proyek,nama_proyek');
>>>>>>> 75545f97fa86d1013c34a986b409c027f64f1327
        
    return $this->datatables->generate();
  }

}

   