
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
        <!-- <div class="table-responsive"> -->
      
          <h3 class="pull-right">Cari <i class="icon fa fa-search"></i></h3>
          <table class="table table-striped dt-responsive display wrap" id="mytable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="font-size: 8pt">NO. DOKUMEN</th>
                <th style="font-size: 8pt">NO. SURAT</th>
                <th style="font-size: 8pt">NO. PURCHASE ORDER</th>
                <th style="font-size: 8pt">TANGGAL PO</th>
                <th style="font-size: 8pt">DESKRIPSI</th>
                <th style="font-size: 8pt">JURU BELI</th>
                <th style="font-size: 8pt">PROYEK</th>
                <th style="font-size: 8pt">VENDOR</th>
                <th style="font-size: 8pt">KODE JURUBELI</th>
                <th style="font-size: 8pt">KODE PROYEK</th>
                <th style="font-size: 8pt">KODE VENDOR</th>
                <th style="font-size: 8pt">KODE RAK</th>
                <th style="font-size: 8pt">POSISI RAK</th>
                <th style="font-size: 8pt">PETUGAS ENTRY</th>
                <th style="font-size: 8pt">PETUGAS </th>
                <th style="font-size: 8pt">PETUGAS </th>
                <th style="font-size: 8pt">TANGGAL ENTRY</th>
                <th style="font-size: 8pt">DOKUMEN</th>
                <th style="font-size: 8pt">STATUS DOKUMEN</th>
                <th style="font-size: 8pt">AKSI</th>
                <th></th>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Update Produk-->
<?php
            $attributes = array('id' => 'add-row-form'); 
            echo form_open_multipart('Arsip/update', $attributes); ?>
   <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:1000px; max-width: unset">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">UPDATE DATA ARSIP</h4>
       </div>
       <div class="modal-body">
         <div class="alert alert-danger print-error-msg" style="display:none"></div>
          <div class="alert alert-primary print-success-msg" style="display:none"></div>
         <div class="form-group">
          <label class=" form-control-label">Nomor Dokumen</label>
          <div class="input-group">
            <input class="form-control" name="no_dokumen" readonly>
          </div>
        </div>
         <div class="form-group">
          <label class=" form-control-label">Nomor Surat</label>
          <div class="input-group">
            <input class="form-control" name="no_surat">
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
          <?php echo form_error('jurubeli', ' <div class="alert alert-danger" role="alert">', '</div>'); ?>

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
        <label class=" form-control-label pull-right" id="pk"  hidden></label>
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
        <label class=" form-control-label pull-right" id="vn"  hidden></label>
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
      <?php 
              $session_data=$this->session->userdata('logged_in');
              $akses=$session_data['hak_akses'];
              if($akses==2){?>
            <div class="form-group">
              <label class=" form-control-label">Kode Rak</label>
              <label class=" form-control-label pull-right" id="rk"  hidden></label>
              <div class="input-group">
              <input type="text" name="rk" class="rk" hidden>
                <select class="standardSelect" name="rak" tabindex="-1" style="display: none;" id="rak">
                  <option value="" label="default"></option>
                  <?php foreach ($rak_ke as $key) {?>
                    <option value="<?php echo $key['kd_rak']; ?>"><?php echo $key['kd_rak']." | ".$key['nama_rak']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
             
          <?php }else{?> <input type="text" name="rk" class="rk" hidden><?php }?>
      <div class="form-group">
        <input type="text" name="dokumena" hdden>
        <label class=" form-control-label">Scan Dokumen (PDF File)</label>
        <div class="input-group">
          <input class="form-control" type="File" name="dokumen">
        </div>
      </div>
      <?php if($akses==2){?>
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
      <?php } else{} ?>
    </div>
    <input type="text" name="tgl_entry" hidden>
    <input type="text" name="petugas" hidden>
    <div class="modal-footer">
      <button type="reset" class="btn btn-default" id="reset_me" data-dismiss="modal" onClick="history.go(0);">Tutup</button>
      <button type="submit" id="update-row" class="btn btn-success">Perbarui</button>
    </div>
  </div>
</div>
</div>
</form>

<div class="modal fade" id="ModalViewPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: unset; width: 1000px;">
   <div class="modal-content" style="height: 700px">
     <div class="modal-header">
       <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Lihat Dokumen PDF</h4>
     </div>
     <div class="modal-body">
      <div id="pdf" style="height:550px"></div>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
 <!-- <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script> -->


<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('') ?>assets/js/lib/chosen/chosen.jquery.min.js"></script>

<!-- gawe button exel -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.57/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.57/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
<!-- Specific Page Vendor -->
<script src="<?php echo base_url()?>assets/jquery-datatables-bs3/assets/js/datatables.js"></script>
<script src="<?php echo base_url()?>assets/jquery-datatables/jquery.dataTables.yadcf.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url('') ?>assets/js/main.js"></script>


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
   
      "use strict";
  

    var table = $("#mytable").dataTable({
      orderCellsTop: true,
      oLanguage: {
        sProcessing: "LOADING..."
      },
      bJQueryUI: true,
      processing: true,
      // serverSide: true,
      ajax: {"url": "<?php echo base_url().'index.php/arsip/get_guest_json'?>", "type": "POST"},
      columns: [
      {"data": "no_dokumen"},
      {"data": "no_surat"},
      {"data": "no_po"},
      {"data": "tgl_po", render : function(data){ return moment(data).format('DD-MM-YYYY');}},
      {"data": "deskripsi"},
      {"data": "nm_jurubeli"},
      {"data": "nm_proyek"},
      {"data": "nm_vendor"},
      {"data": "jurubeli", "searchable": false, "visible":false},
      {"data": "proyek" , "searchable": false, "visible":false},
      {"data": "vendor", "searchable": false, "visible":false},
      {"data": "no_rak", "searchable": false, "visible":false},
      {"data": "rak"},
      {"data": "petugas", "searchable": true},
      {"data": "no_petugas", "searchable": false, "visible":false},
      {"data": "akses_petugas", "searchable": false, "visible":false},
      {"data": "tgl_entry", "searchable": false},
      {"data": "dokumen"},
      {"data": "status_dokumen", render : function(data) {
         return data == '1' ? '<div class="label label-success"><strong style="color:white; font-size:10pt"><i class="icon fa fa-check"></i> SELESAI</strong></div>' : '<div class="label label-danger" style="background-color:#9c0808;padding-top:6px"><strong style="color:white; font-size:10pt"><i class="icon fa fa-close"></i> BELUM SELESAI</strong></div>' ;
      },
      className: "text-center"
    },
       {"data": "", "visible":true,"orderable":false, "searchable": false, "render": function (data, type, row) {
                <?php $session_data=$this->session->userdata('logged_in');
                      $akses=$session_data['hak_akses']; 
                      $no_petugas=$session_data['id_petugas'];?>
                if (row.no_petugas==<?php echo $no_petugas ?> & row.akses_petugas==2 ) {
                  return '<button class="btn btn-warning" data-toggle="modal" data-no_dokumen="'+row.no_dokumen+'" data-no_po="'+row.no_po+'" data-tgl_po="'+row.tgl_po+'" data-deskripsi="'+row.deskripsi+'"data-jurubeli="'+row.nm_jurubeli+'" data-kd_jurubeli="'+row.jurubeli+'"data-proyek="'+row.nm_proyek+'"data-kd_proyek="'+row.proyek+'" data-vendor="'+row.nm_vendor+'" data-kd_vendor="'+row.vendor+'" data-kd_rak="'+row.no_rak+'" data-dokumen="'+row.dokumen+'" data-rak="'+row.rak+'" data-status="'+row.status_dokumen+'" data-petugas="'+row.no_petugas+'" data-entry="'+row.tgl_entry+'" data-no_surat="'+row.no_surat+'" data-target="#ModalUpdate" onclick="delrec()"><i class="icon fa fa-edit"></i> Edit</button>';
                   }else if(row.akses_petugas==1){
                    return '<button class="btn btn-warning" data-toggle="modal" data-no_dokumen="'+row.no_dokumen+'" data-no_po="'+row.no_po+'" data-tgl_po="'+row.tgl_po+'" data-deskripsi="'+row.deskripsi+'"data-jurubeli="'+row.nm_jurubeli+'" data-kd_jurubeli="'+row.jurubeli+'"data-proyek="'+row.nm_proyek+'"data-kd_proyek="'+row.proyek+'" data-vendor="'+row.nm_vendor+'" data-kd_vendor="'+row.vendor+'" data-kd_rak="'+row.no_rak+'" data-rak="'+row.rak+'" data-dokumen="'+row.dokumen+'" data-status="'+row.status_dokumen+'" data-petugas="'+row.no_petugas+'" data-entry="'+row.tgl_entry+'" data-no_surat="'+row.no_surat+'" data-target="#ModalUpdate" onclick="delrec()"><i class="icon fa fa-edit"></i> Edit</button>';
                   }else{
                    return ''
                   }               
        }},

      {"data": "pdf", "orderable":false}
      ],
      order: [[0, 'desc']],
      dom: 'lBfrtip',
      buttons: [
      
      {
        extend: 'excel',
        exportOptions: {
          columns: [0,1,2,3,4,5,6,7,12,13,16,17,18]
        }
      },
      {
        extend: 'pdfHtml5',
        orientation: 'landscape',
        pageSize: 'LEGAL',
        exportOptions: {
          columns: [0,1,2,3,4,5,6,7,12,13,16,17,18]
        }
      }
      ],
      lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
      rowCallback: function(row, data, iDisplayIndex) {
        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        $('td:eq(0)', row).html();
        if(data["rak"] == "Kosong" ){
                $('td', row).css('background-color', '#ffc3c8');
                $('td', row).css('color', '#000');
            }
        if(data["status_dokumen"] == "2" ){
            $('td', row).css('background-color', '#ffc3c8');
            $('td', row).css('color', '#000');
        }
      },
     
      initComplete: function() {
          var api = this.api();
          $('#mytable_filter input').off('.DT').on('input.DT', function() {
            api.search(this.value).draw();
          });

      },
responsive: true
    }).yadcf([
            {
                column_number: 0,
                filter_type: "text",
            },{
                 column_number: 1,
                 filter_type: "text",
            },{
                column_number: 2,
                filter_type: "text"
            },{
                column_number: 3,
                filter_type: "range_date",
                date_format:"dd-mm-yy",
                // column_data_type: "text",
            },{
                column_number: 4,
                filter_type: "text",
            },{
                column_number: 5,
                filter_type: "text",
            },{
                column_number: 6,
                filter_type: "text",
            },{
                column_number: 7,
                filter_type: "text",
            },{
                column_number: 12,
                select_type: "chosen",
                select_type_options: {
            no_results_text: 'Can\'t find ->',
            search_contains: true
        }
            },{
                column_number: 13,
                filter_type: "text",
                filter_delay: 500
            },{
                column_number: 14,
                filter_type: "text",
                filter_delay: 500
            },
        ],{ filters_tr_index: 1});
      // end setup datatables
      // get Edit Records
      $("#ModalUpdate").on('shown.bs.modal',function(e){
        var triggerLink = $(e.relatedTarget);
        var no_dokumen=triggerLink.data("no_dokumen");
        var no_surat=triggerLink.data("no_surat");
        var no_po=triggerLink.data('no_po');
        var tgl_po=triggerLink.data('tgl_po');
        var deskripsi=triggerLink.data('deskripsi');
        var jurubeli=triggerLink.data('jurubeli');
        var proyek=triggerLink.data('proyek');
        var vendor=triggerLink.data('vendor');
        var kd_jurubeli=triggerLink.data('kd_jurubeli');
        var kd_proyek=triggerLink.data('kd_proyek');
        var kd_vendor=triggerLink.data('kd_vendor');
        var kd_rak=triggerLink.data('kd_rak');
        var rak=triggerLink.data('rak');
        var dokumen=triggerLink.data('dokumen');
        var status=triggerLink.data('status');
        var petugas=triggerLink.data('petugas');
        var entry=triggerLink.data('entry');

        $('[name="no_dokumen"]').val(no_dokumen);
        $('[name="no_surat"]').val(no_surat);
        $('[name="no_po"]').val(no_po);
        $('[name="tgl_po"]').val(tgl_po);
        $('[name="deskripsi"]').val(deskripsi);
        $('[name="jb"]').val(kd_jurubeli);
        $('[name="pk"]').val(kd_proyek);
        $('[name="vn"]').val(kd_vendor);
        $('[name="rk"]').val(kd_rak);
        $('[name="jurubeli"]').val(jurubeli);
        $('[id="jb"]').text(jurubeli);
        $('[id="pk"]').text(proyek);
        $('[id="vn"]').text(vendor);
        $('[id="rk"]').text(rak);
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


      $(document).ready(function() {
        $("#ModalUpdate").on('shown.bs.modal',function(){
          $("#jurubeli").chosen({
            placeholder_text:$(".jb").val()+" | "+$("#jb").text(),
            disable_search_threshold: 10,
            no_results_text: "Maaf, Tidak bisa ditemukan!",
            width: "100%"
          });

          $("#proyek").chosen({
            placeholder_text:$(".pk").val()+" | "+$("#pk").text(),
            disable_search_threshold: 10,
            no_results_text: "Maaf, Tidak bisa ditemukan!",
            width: "100%"
          });
          $("#vendor").chosen({
            placeholder_text:$(".vn").val()+" | "+$("#vn").text(),
            disable_search_threshold: 10,
            no_results_text: "Maaf, Tidak bisa ditemukan!",
            width: "100%"
          });
          $("#rak").chosen({
            placeholder_text:$(".rk").val()+" | "+$("#rk").text(),
            disable_search_threshold: 10,
            no_results_text: "Maaf, Tidak bisa ditemukan!",
            width: "100%"
          });
        });
        
    });

      $(document).ready(function() {
        $("#ModalUpdate").on("hidden.bs.modal", function() {
         history.go(0);
        });
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

    });

 
  </script>