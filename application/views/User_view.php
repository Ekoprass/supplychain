<?php $this->view('template.php'); ?>
<div class="content">
    <div class="animated fadeIn">
       <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header" style="background-color: #03428b">
                   <h2 style="color: #fff">DAFTAR PETUGAS</h2>
              </div>
              <div class="card-body card-block">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">TAMBAH PETUGAS</button>
                <h3 class="pull-right">Cari <i class="icon fa fa-search"></i></h3>
                <table class="table table-striped" id="mytable">
                  <thead>
                    <tr>
                      <th>NO. PETUGAS</th>
                      <th>NAMA PETUGAS</th>
                      <th>USERNAME</th>
                      <th>PASSWORD</th>
                      <th>HAK AKSES</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>


        <!-- Modal Add Produk-->
          <form id="add-row-form" action="<?php echo base_url().'index.php/User/simpan'?>" method="post">
             <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">TAMBAH PETUGAS</h4>
                       </div>
                       <div class="modal-body">
                           <div class="form-group">
                               <input type="text" name="Nomer" class="form-control" placeholder="Masukkan Nomer Petugas" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Nama" class="form-control" placeholder=" Masukkan Nama Petugas" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Username" class="form-control" placeholder="Masukkan Username" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Password" class="form-control" placeholder="Masukkan Password" required>
                           </div>
                           <!-- <div class="form-group">
                               <input type="text" name="hak_akses" class="form-control" placeholder="Ketik : 1 untuk user, 2 untuk admin" required>
                           </div> -->
                       <!--      <div class="form-check-inline form-check">
                                                <label for="inline-checkbox1" class="form-check-label ">
                                                    <input type="radio" id="inline-checkbox1" name="hak_akses" value="1" class="form-check-input">Petugas
                                                </label> &nbsp; &nbsp;
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="hak_akses" value="2" class="form-check-input">Admin
                                                </label>
                            </div> -->
                             <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="hak_akses" value="1" class="form-check-input">Petugas
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="hak_akses" value="2" class="form-check-input">Admin
                                                    </label>
                                                </div>
                       </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" id="add-row" class="btn btn-info">Simpan</button>
                       </div>
                    </div>
                </div>
             </div>
         </form>

       <!-- Modal Update Produk-->
        <form id="add-row-form" action="<?php echo base_url().'index.php/User/update'?>" method="post">
           <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">UPDATE DATA USER</h4>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                               <input type="text" name="Nomer" class="form-control" placeholder="Masukkan Nomer Petugas" readonly>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Nama" class="form-control" placeholder=" Masukkan Nama Petugas" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Username" class="form-control" placeholder="Masukkan Username" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Password" class="form-control" placeholder="Masukkan Password" required>
                           </div>
                           <!-- <div class="form-group">
                               <input type="text" name="hak_akses" class="form-control" placeholder="Ketik : 1 untuk user, 2 untuk admin" required>
                           </div> -->
                            <div class="radio">
                               <label for="radio1" class="form-check-label ">
                               <input type="radio" id="radio1" name="hak_akses" value="1" class="form-check-input">PETUGAS
                               </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                <input type="radio" id="radio2" name="hak_akses" value="2" class="form-check-input">ADMIN
                                </label>
                            </div>
                     </div>
                     <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button> -->
                          <button type="submit" id="add-row" class="btn btn-info">PERBARUI</button>
                     </div>
                  </div>
              </div>
           </div>
       </form>
    </div>
  </div>  
</div>
<?php $this->view('footer.php'); ?>
<script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
<!-- Specific Page Vendor -->
<script src="<?php echo base_url()?>assets/select2/select2.js"></script>
<script src="<?php echo base_url()?>assets/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/jquery-datatables-bs3/assets/js/datatables.js"></script>

<!-- Examples -->
<script src="<?php echo base_url()?>assets/javascripts/tables/examples.datatables.editable.js"></script>

<script>
  $(document).ready(function(){
    // Setup datatables
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "LOADING..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/User/get_guest_json'?>", "type": "POST"},
                  columns: [
                        {"data": "no_petugas"},
                        {"data": "nama_petugas"},
                        {"data": "username"},
                        {"data": "password"},
                        {"data": "hak_akses"},
                        {"data": "view"},
                        // {"data": "view"},
                  ],
              order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }

      });
      // end setup datatables
      // get Edit Records
      $('#mytable').on('click','.edit_record',function(){
            var Nomer=$(this).data('no_petugas');
            var Nama=$(this).data('nama_petugas');
            var Username=$(this).data('username');
            var Password=$(this).data("password");
            var hak_akses=$(this).data("hak_akses");
            $('#ModalUpdate').modal('show');
            $('[name="Nomer"]').val(Nomer);
            $('[name="Nama"]').val(Nama);
            $('[name="Username"]').val(Username);
            $('[name="Password"]').val(Password);
            // $('[name="hak_akses"]').val(hak_akses);
            
      });
      // End Edit Records
      // get Hapus Records
      // $('#mytable').on('click','.hapus_record',function(){
   //          var kode=$(this).data('kd_jurubeli');
   //          $('#ModalHapus').modal('show');
   //          $('[name="Kode"]').val(kode);
   //    });
      // End Hapus Records

  });
</script>
