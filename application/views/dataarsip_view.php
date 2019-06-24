<?php $this->view('template.php'); ?>
<style type="text/css">
.pdfobject-container {
  width: 100%;
  max-width: 600px;
  height: 600px;
  margin: 2em 0;
}

.pdfobject { border: solid 1px #666; }
#results { padding: 1rem; }
.hidden { display: none; }
.success { color: #4F8A10; background-color: #DFF2BF; }
.fail { color: #D8000C; background-color: #FFBABA; }
</style>
<div class="content">
    <div class="animated fadeIn">
       <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header" style="background-color: #03428b">
                   <h2 style="color: #fff">DATA ARSIP DOKUMEN</h2>
              </div>
                  <div class="card-body card-block">
                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">TAMBAH PETUGAS</button> -->
                    <div class="table-responsive">
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
                          <th>NO. DOKUMEN</th>
                          <th>NO. PURCHASE ORDER</th>
                          <th>TANGGAL PO</th>
                          <th>DESKRIPSI</th>
                          <th>JURU BELI</th>
                          <th>PROYEK</th>
                          <th>VENDOR</th>
                          <th>POSISI RAK</th>
                          <th>PETUGAS ENTRY</th>
                          <th>TANGGAL ENTRY</th>
                          <th>DOKUMEN</th>
                          <th>STATUS DOKUMEN</th>
                          <th>AKSI</th>
                          <th></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  </div>
            </div>
          </div>


       <!-- Modal Update Produk-->
        <form id="add-row-form" action="<?php echo site_url()?>Arsip/update" method="post" enctype="multipart/form-data">
           <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">UPDATE DATA USER</h4>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                            <label class=" form-control-label">Nomor Dokumen</label>
                            <div class="input-group">
                              <input class="form-control" name="no_dokumen">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Nomor Purchase Order</label>
                            <div class="input-group">
                              <input class="form-control" name="no_po">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Tanggal Purchase Order</label>
                              <div class='input-group date' id='datetimepicker'>
                                <span class="input-group-addon">
                                  <span class="menu-icon fa fa-calendar"></span>
                                </span>
                                <input type='text' class="form-control" name="tgl_po" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Deskripsi</label>
                            <div class="input-group">
                              <textarea name="deskripsi" placeholder="Description" class="form-control">
                              </textarea>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class=" form-control-label">Kode Juru Beli</label>
                            <div class="input-group">
                              <select class="standardSelect" tabindex="-1" style="display: none;" name="jurubeli">
                                      <option value="" label="default"></option>
                                       <?php foreach ($jurubeli as $key) {?>
                                        <option value="<?php echo $key['kd_jurubeli']; ?>"><?php echo $key['kd_jurubeli']." | ".$key['nama_jurubeli']; ?></option>
                                       <?php } ?>
                                  </select>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Kode Proyek</label>
                            <div class="input-group">
                              <select class="standardSelect" tabindex="-1" style="display: none;" name="proyek">
                                <option value="" label="default"></option>
                                 <?php foreach ($proyek as $key) {?>
                                  <option value="<?php echo $key['kd_proyek']; ?>"><?php echo $key['kd_proyek']." | ".$key['nama_proyek']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Kode Vendor</label>
                            <div class="input-group">
                              <select class="standardSelect" tabindex="-1" style="display: none;" name="vendor">
                                <option value="" label="default"></option>
                                 <?php foreach ($vendor as $key) {?>
                                  <option value="<?php echo $key['kd_vendor']; ?>"><?php echo $key['kd_vendor']." | ".$key['nama_vendor']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Posisi Rak Dokumen</label>
                            <div class="input-group">
                              <select class="standardSelect" tabindex="-1" style="display: none;" name="rak">
                                <option value="" label="default"></option>
                                 <?php foreach ($rak as $key) {?>
                                  <option value="<?php echo $key['no_rak']; ?>"><?php echo $key['no_rak']." | ".$key['rak_ke']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Scan Dokumen(PDF File)</label>
                            <div class="input-group">
                              <input class="form-control" type="File" name="dokumen">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class=" form-control-label">Status Purchase Order</label>
                            <div class="input-group">
                                <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                      <input type="radio" id="radio1" name="status" value="1" class="form-check-input">Selesai
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                      <input type="radio" id="radio2" name="status" value="2" class="form-check-input">Belum Selesai
                                    </label>
                                </div>
                            </div>
                          </div>
                     </div>
                     <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="submit" id="add-row" class="btn btn-success">Perbarui</button>
                     </div>
                  </div>
              </div>
           </div>
       </form>

        <div class="modal fade" id="ModalViewPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: unset; width: 1000px;">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Lihat Dokumen PDF</h4>
                 </div>
                 <div class="modal-body">
                      <div id="pdf" style="max-width: unset;"></div>
                      <div ></div>

                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                 </div>
              </div>
          </div>
       </div>
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


<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url('') ?>assets/js/main.js"></script>
<script src="<?php echo base_url('') ?>assets/js/lib/chosen/chosen.jquery.min.js"></script>


<script src="<?php echo base_url() ?>assets/pdfobject/pdfobject.min.js"></script>


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
              ajax: {"url": "<?php echo base_url().'index.php/arsip/get_guest_json'?>", "type": "POST"},
                  columns: [
                        {"data": "no_dokumen"},
                        {"data": "no_po"},
                        {"data": "tgl_po"},
                        {"data": "deskripsi"},
                        {"data": "jurubeli"},
                        {"data": "proyek"},
                        {"data": "vendor"},
                        {"data": "rak_ke"},
                        {"data": "petugas"},
                        {"data": "tgl_entry"},
                        {"data": "dokumen"},
                        {"data": "status_dokumen"},
                        {"data": "view"},
                        {"data": "pdf"}
                  ],
              order: [[2, 'asc']],
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
            var no_dokumen=$(this).data('no_dokumen');
            var no_po=$(this).data('no_po');
            var tgl_po=$(this).data('tgl_po');
            var deskripsi=$(this).data('deskripsi');
            var jurubeli=$(this).data('jurubeli');
            var proyek=$(this).data('proyek');
            var vendor=$(this).data('vendor');
            var rak=$(this).data('rak_ke');
            var dokumen=$(this).data('dokumen');
            // var status=$(this).data('status_dokumen');
            $('#ModalUpdate').modal('show');
            $('[name="no_dokumen"]').val(no_dokumen);
            $('[name="no_po"]').val(no_po);
            $('[name="tgl_po"]').val(tgl_po);
            $('[name="deskripsi"]').val(deskripsi);
            $('[name="jurubeli"]').val(jurubeli);
            $('[name="proyek"]').val(proyek);
            $('[name="vendor"]').val(vendor);
            $('[name="rak"]').val(rak);
            $('[name="dokumen"]').val(dokumen);
            $('[name="status"]').val(status);
            
      });
      $('#mytable').on('click','.view_pdf',function(){
            var options = {
              pdfOpenParams: {
                pagemode: "thumbs",
                navpanes: 1,
                toolbar: 1,
                statusbar: 1,
                view: "Fillv"
              }
            };
            var dokumen=$(this).data('dokumen');

            $('#ModalViewPDF').modal('show');
            $('[name="Kode"]').val(dokumen);
            var myPDF = PDFObject.embed("<?php echo base_url().'assets/dokument/'?>"+dokumen, "#pdf", options);

            el.setAttribute("class", (myPDF) ? "success" : "fail");
            el.innerHTML = (myPDF) ? "PDFObject successfully added an &lt;embed> element to the page!" : "Uh-oh, the embed didn't work.";
        
      });
      // End Edit Records
      // get Hapus Records
      // $('#mytable').on('click','.hapus_record',function(){
      //       var kode=$(this).data('kd_jurubeli');
      //       $('#ModalHapus').modal('show');
      //       $('[name="Kode"]').val(kode);
      // });
      // End Hapus Records

  });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
