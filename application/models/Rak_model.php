<?php
class Rak_model extends CI_Model{

  function get_all_rak() 
  {
    $this->datatables->select('no_rak,rak_ke');
    $this->datatables->from('rak_ke');
    $this->datatables->add_column('view',
<<<<<<< HEAD
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-no_rak="$1" data-rak_ke="$2">Edit &nbsp <i class="fa fa-edit"></a>',
=======
    '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-s" data-no_rak="$1" data-rak_ke="$2">EDIT &nbsp <i class="fa fa-edit"></a>',
>>>>>>> 75545f97fa86d1013c34a986b409c027f64f1327
    'no_rak,rak_ke');
        
    return $this->datatables->generate();
  }

}

   