<?php $this->view('template.php'); ?>
<div class="content">
    <div class="animated fadeIn">
       <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header" style="background-color: #03428b">
                   <h2 style="color: #fff">DATA PROYEK</h2>
              </div>
              <div class="card-body card-block">
            		<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">TAMBAH PROYEK</button>
                <h3 class="pull-right">Cari <i class="icon fa fa-search"></i></h3>
                <table class="table table-striped" id="mytable">
                  <thead>
                    <tr>
                      <th>KODE PROYEK</th>
                      <th>NAMA PROYEK</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

	<!-- Modal Add Produk-->
	  <form id="add-row-form" action="<?php echo base_url().'index.php/proyek/simpan'?>" method="post">
	     <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">
	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                   <h4 class="modal-title" id="myModalLabel">TAMBAH DATA PROYEK</h4>
	               </div>
	               <div class="modal-body">
                  <div class="alert alert-danger print-error-msg" style="display:none"></div>
                  <div class="alert alert-primary print-success-msg" style="display:none"></div>
	                   <div class="form-group">
	                       <input type="text" id="proyek" name="Kode" class="form-control" placeholder="Kode Proyek" required>
  
	                   </div>
										 <div class="form-group">
	                       <input type="text" id="nama_proyek" name="Nama" class="form-control" placeholder="Nama Proyek" required>
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
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/proyek/update'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">EDIT DATA PROYEK</h4>
 	               </div>
 	               <div class="modal-body">
 	                   <div class="form-group">
 	                       <input type="text" name="Kode" readonly class="form-control" placeholder="Kode Proyek" required>
 	                   </div>
 										 <div class="form-group">
 	                       <input type="text" name="Nama" class="form-control" placeholder="Nama Proyek " required>
 	                   </div>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
 	                  	<button type="submit" id="add-row" class="btn btn-info">Perbarui</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>
   <!-- Modal Hapus Produk-->
   <form id="dell-row-form" action="<?php echo site_url().'/proyek/delete'?>" method="post">
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" id="del-proyek" name="kd_proyek" class="form-control" placeholder="Kode Proyek" required>
            <strong>Anda yakin ingin menghapus record ini?</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" id="dell-row" class="btn btn-success">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</div></div></div>
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
              ajax: {"url": "<?php echo base_url().'index.php/proyek/get_guest_json'?>", "type": "POST"},
                	columns: [
												{"data": "kd_proyek"},
												{"data": "nama_proyek"},
                        {"data": "view"}
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
            var Kode=$(this).data('kd_proyek');
						var Nama=$(this).data('nama_proyek');
            $('#ModalUpdate').modal('show');
            $('[name="Kode"]').val(Kode);
						$('[name="Nama"]').val(Nama);
						
      });
			// End Edit Records
			// get Hapus Records
      $('#mytable').on('click','.hapus_record',function(){
            var kode=$(this).data('kd_proyek');
            $('#ModalHapus').modal('show');
            $('[name="kd_proyek"]').val(kode);
      });
      // End Hapus Records

	});
</script>
<script type="text/javascript">
  $(document).ready(function() {
      $("#add-row").click(function(e){
        e.preventDefault();
        var kd_proyek = $("input[id='proyek']").val();
        var nama_proyek = $("input[id='nama_proyek']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/proyek/simpan",
              type:'POST',
              dataType: "json",
              data: {Kode:kd_proyek, Nama:nama_proyek},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/proyek");
                  }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                  }
              }
          });
      }); 
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
      $("#dell-row").click(function(e){
        e.preventDefault();
        var kd_proyek = $("input[id='del-proyek']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/proyek/delete",
              type:'POST',
              dataType: "json",
              data: {kd_proyek:kd_proyek},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/jurubeli");
                  }else{
                    $(".print-error-msg").css('display','none');
                    alert(data.error);
                    // $(".print-error-msg").html(data.error);
                  }
              }
          });
      }); 
  });
</script>

</body>
</html>
