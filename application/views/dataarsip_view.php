<style>
  .datepicker{z-index:1151 !important;}
</style>
<?php $this->view('template.php'); ?>

<div class="content">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="background-color: #03428b">
         <h2 style="color: #fff">DATA ARSIP DOKUMEN</h2>
       </div>
       <div class="card-body card-block">
        <!-- <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">TAMBAH PETUGAS</button> -->
        <div class="table-responsive">
          <table class="table table-striped dt-responsive display wrap" id="mytable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="font-size: 8pt">NO. DOKUMEN</th>
                <th style="font-size: 8pt">NO. PURCHASE ORDER</th>
                <th style="font-size: 8pt">TANGGAL PO</th>
                <th style="font-size: 8pt">DESKRIPSI</th>
                <th style="font-size: 8pt">JURU BELI</th>
                <th style="font-size: 8pt">PROYEK</th>
                <th style="font-size: 8pt">VENDOR</th>
                <th style="font-size: 8pt">KODE JURUBELI</th>
                <th style="font-size: 8pt">KODE PROYEK</th>
                <th style="font-size: 8pt">KODE VENDOR</th>
                <th style="font-size: 8pt">POSISI RAK</th>
                <th style="font-size: 8pt">PETUGAS ENTRY</th>
                <th style="font-size: 8pt">TANGGAL ENTRY</th>
                <th style="font-size: 8pt">DOKUMEN</th>
                <th style="font-size: 8pt">STATUS DOKUMEN</th>
                <th style="font-size: 8pt">AKSI</th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Update Produk-->
  <form id="add-row-form" action="<?php echo site_url()?>/Arsip/update" method="post" enctype="multipart/form-data">
   <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:1000px; max-width: unset">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">UPDATE DATA ARSIP</h4>
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
          <div class='input-group date' id='myDatepicker2'>
            <span class="input-group-addon">
              <span class="menu-icon fa fa-calendar"></span>
            </span>
            <input type='date' class="form-control clsDatePicker" name="tgl_po" />
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
          <label class=" form-control-label pull-right" id="jb" hidden></label>
          <div class="input-group">
          <input type="text" name="jb" hidden class="jb">
            <select class="standardSelect" tabindex="-1" style="display: none;" name="jurubeli" id='jurubeli'>
              <option value="" label="default"></option>
              <?php foreach ($jurubeli as $key) {?>
                <option value="<?php echo $key['kd_jurubeli']; ?>"><?php echo $key['kd_jurubeli'].' | '.$key['nama_jurubeli']; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label class=" form-control-label">Kode Proyek</label>
        <label class=" form-control-label pull-right" id="pk" hidden></label>
        <div class="input-group">
          <input type="text" name="pk"class="pk" hidden>
          <select class="standardSelect" tabindex="-1" style="display: none;" name="proyek" id="proyek">
            <option value="" label="default"></option>
            <?php foreach ($proyek as $key) {?>
              <option value="<?php echo $key['kd_proyek']; ?>"><?php echo $key['kd_proyek']." | ".$key['nama_proyek']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class=" form-control-label">Kode Vendor</label>
        <label class=" form-control-label pull-right" id="vn" hidden></label>
        <div class="input-group">
          <input type="text" name="vn" class="vn" hidden>
          <select class="standardSelect" tabindex="-1" style="display: none;" name="vendor" id="vendor">
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
          <input type="text" class="form-control" name="rak">
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="dokumena" hidden>
        <label class=" form-control-label">Scan Dokumen (PDF File)</label>
        <div class="input-group">
          <input class="form-control" type="File" name="dokumen">
        </div>
      </div>
      <div class="form-group">
        <label class=" form-control-label">Status Purchase Order</label>
        <div class="input-group">
          <div class="radio">
            <label for="radio2" class="form-check-label ">
              <input type="radio" id="status1" name="status" value="1" class="form-check-input">Selesai
            </label>
          </div>
          <div class="radio">
            <label for="radio2" class="form-check-label ">
              <input type="radio" id="status2" name="status" value="2" class="form-check-input">Belum Selesai
            </label>
          </div>
        </div>
      </div>
    </div>
    <input type="text" name="tgl_entry" hidden>
    <input type="text" name="petugas" hidden>
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
       <button type="reset" class="close" id="reset_me" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Lihat Dokumen PDF</h4>
     </div>
     <div class="modal-body">
      <div id="pdf" style="max-width: unset;"></div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
  function delrec() {
  document.getElementById("add-row-form").reset();
}
</script>
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
      {"data": "nm_jurubeli"},
      {"data": "nm_proyek"},
      {"data": "nm_vendor"},
      {"data": "jurubeli", "searchable": false, "visible":false},
      {"data": "proyek" , "searchable": false, "visible":false},
      {"data": "vendor", "searchable": false, "visible":false},
      {"data": "rak_ke"},
      {"data": "petugas", "searchable": true},
      {"data": "tgl_entry", "searchable": false},
      {"data": "dokumen"},
      {"data": "status_dokumen", render : function(data) {
         return data == '1' ? '<div class="label label-success"><strong style="color:white; font-size:10pt"><i class="icon fa fa-check"></i> SELESAI</strong></div>' : '<div class="label label-danger"><strong style="color:white; font-size:10pt"><i class="icon fa fa-close"></i> BELUM SELESAI</strong></div>' ;
      },
      className: "text-center"
    },
       {"data": "", "orderable":false, "searchable": false, "render": function (data, type, row) {return '<button class="btn btn-warning" data-toggle="modal" data-no_dokumen="'+row.no_dokumen+'" data-no_po="'+row.no_po+'" data-tgl_po="'+row.tgl_po+'" data-deskripsi="'+row.deskripsi+'"data-jurubeli="'+row.nm_jurubeli+'" data-kd_jurubeli="'+row.jurubeli+'"data-proyek="'+row.nm_proyek+'"data-kd_proyek="'+row.proyek+'" data-vendor="'+row.nm_vendor+'" data-kd_vendor="'+row.vendor+'" data-rak_ke="'+row.rak_ke+'" data-dokumen="'+row.dokumen+'" data-status="'+row.status_dokumen+'" data-petugas="'+row.petugas+'" data-entry="'+row.tgl_entry+'" data-target="#ModalUpdate" onclick="delrec()"><i class="icon fa fa-edit"></i> Edit</button>';}},

      {"data": "pdf", "orderable":false}
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
      $("#ModalUpdate").on('shown.bs.modal',function(e){
        var triggerLink = $(e.relatedTarget);
        var no_dokumen=triggerLink.data("no_dokumen");
        var no_po=triggerLink.data('no_po');
        var tgl_po=triggerLink.data('tgl_po');
        var deskripsi=triggerLink.data('deskripsi');
        var jurubeli=triggerLink.data('jurubeli');
        var proyek=triggerLink.data('proyek');
        var vendor=triggerLink.data('vendor');
        var kd_jurubeli=triggerLink.data('kd_jurubeli');
        var kd_proyek=triggerLink.data('kd_proyek');
        var kd_vendor=triggerLink.data('kd_vendor');
        var rak=triggerLink.data('rak_ke');
        var dokumen=triggerLink.data('dokumen');
        var status=triggerLink.data('status');
        var petugas=triggerLink.data('petugas');
        var entry=triggerLink.data('entry');

        $('[name="no_dokumen"]').val(no_dokumen);
        $('[name="no_po"]').val(no_po);
        $('[name="tgl_po"]').val(tgl_po);
        $('[name="deskripsi"]').val(deskripsi);
        $('[name="jb"]').val(kd_jurubeli);
        $('[name="pk"]').val(kd_proyek);
        $('[name="vn"]').val(kd_vendor);
        $('[name="jurubeli"]').val(jurubeli);
        $('[id="jb"]').text(jurubeli);
        $('[id="pk"]').text(proyek);
        $('[id="vn"]').text(vendor);
        $('[name="proyek"]').val(proyek);
        $('[name="vendor"]').val(vendor);
        $('[name="rak"]').val(rak);
        $('[name="sa"]').val(status);
        $('[name="dokumena"]').val(dokumen);
        $('[name="petugas"]').val(petugas);
        $('[name="tgl_entry"]').val(entry);
        if(status=="1"){
          $('input[id="status1"]').prop('checked',true);
        }else if(status=="2"){
          $('input[id="status2"]').prop('checked',true);
        };
      });

      jQuery(document).ready(function() {
        $("#ModalUpdate").on('shown.bs.modal',function(){
        jQuery("#jurubeli").chosen({
          placeholder_text:$(".jb").val()+" | "+$("#jb").text(),
          disable_search_threshold: 10,
          no_results_text: "Maaf, Tidak bisa ditemukan!",
          width: "100%"
        });

        jQuery("#proyek").chosen({
          placeholder_text:$(".pk").val()+" | "+$("#pk").text(),
          disable_search_threshold: 10,
          no_results_text: "Maaf, Tidak bisa ditemukan!",
          width: "100%"
        });
        jQuery("#vendor").chosen({
          placeholder_text:$(".vn").val()+" | "+$("#vn").text(),
          disable_search_threshold: 10,
          no_results_text: "Maaf, Tidak bisa ditemukan!",
          width: "100%"
        }).trigger("chosen:updated");;
        });
      });

      $("#reset_me").click(function() { 
         jQuery("#jurubeli").chosen().trigger("chosen:updated");
         jQuery("#proyek").chosen().trigger("chosen:updated");
         jQuery("#vendor").chosen().trigger("chosen:updated");
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
