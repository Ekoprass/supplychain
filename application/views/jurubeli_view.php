<?php $this->view('template.php'); ?>
<div class="content">
    <div class="animated fadeIn">
       <div class="row">
          <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                   <h2>Juru Beli</h2>
                </div>
                 <div class="card-body card-block">
              		<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                  <table class="table table-striped" id="mytable">
                    <thead>
                      <tr>
                        <th>Kode Juru Beli</th>
                        <th>Juru Beli</th>
                        <!-- <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Category</th>-->
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
            </div>
          </div>
      </div>
    </div>

	<!-- Modal Add Produk-->
	  <form id="add-row-form" action="<?php echo base_url().'index.php/jurubeli/simpan'?>" method="post">
	     <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">
	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                   <h4 class="modal-title" id="myModalLabel">Add New</h4>
	               </div>
	               <div class="modal-body">
	                   <div class="form-group">
	                       <input type="text" name="Kode" class="form-control" placeholder="Kode Juru Beli" required>
	                   </div>
										 <div class="form-group">
	                       <input type="text" name="Nama" class="form-control" placeholder="Nama Juru Beli" required>
	                   </div>
	               </div>
	               <div class="modal-footer">
	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                  	<button type="submit" id="add-row" class="btn btn-success">Save</button>
	               </div>
	      			</div>
	        </div>
	     </div>
	 </form>

	 <!-- Modal Update Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/jurubeli/update'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Update</h4>
 	               </div>
 	               <div class="modal-body">
 	                   <div class="form-group">
 	                       <input type="text" name="Kode" readonly class="form-control" placeholder="Kode Juru Beli" required>
 	                   </div>
 										 <div class="form-group">
 	                       <input type="text" name="Nama" class="form-control" placeholder="Nama Juru Beli" required>
 	                   </div>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <!-- Modal Hapus Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/jurubeli/delete'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Hapus</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" name="Kode" class="form-control" placeholder="Kode Jurubeli" required>
												 <strong>Anda yakin mau menghapus record ini?</strong>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Hapus</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>
  </div></div>
<?php $this->view('footer.php'); ?>
<script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
<!-- Specific Page Vendor -->
<!-- <script src="assets/vendor/select2/select2.js"></script>
<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script> -->

<!-- Examples -->
<!-- <script src="assets/javascripts/tables/examples.datatables.editable.js"></script> -->

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
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/jurubeli/get_guest_json'?>", "type": "POST"},
                	columns: [
												{"data": "kd_jurubeli"},
												{"data": "nama_jurubeli"},
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
            var Kode=$(this).data('kd_jurubeli');
						var Nama=$(this).data('nama_jurubeli');
            $('#ModalUpdate').modal('show');
            $('[name="Kode"]').val(Kode);
						$('[name="Nama"]').val(Nama);
						
      });
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
            var kode=$(this).data('kd_jurubeli');
            $('#ModalHapus').modal('show');
            $('[name="Kode"]').val(kode);
      });
			// End Hapus Records

	});
</script>
</body>
</html>