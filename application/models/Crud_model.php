<?php
class Crud_model extends CI_Model{

  function get_all_jb() {
        $this->datatables->select('kd_jurubeli,nama_jurubeli');
        $this->datatables->from('jurubeli');
        $this->datatables->add_column('view', 
          '<a href="javascript:void(0);" class="edit_record btn btn-info btn-s" data-kd_jurubeli="$1" data-nama_jurubeli="$2">edit<i class="ti ti-pencil-alt"></a>
          <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-s" data-kd_jurubeli="$1"><i class ="fa fa-trash-o"></a>',
          'kd_jurubeli,nama_jurubeli');
       
        return $this->datatables->generate();
  }

}
