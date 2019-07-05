<?php $this->view('template.php'); ?>

 <!-- gawe tanggal -->
 <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
 <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
 <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
 <script type='text/javascript'>

    $(function(){
        $('.input-group.date').datepicker({
            calendarWeeks: true,
            todayHighlight: true,
            autoclose: true
        });  
    });

</script>

<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">	                   
					<div class="card-header" style="background-color: #03428b">
						<h2 style="color: #fff">INPUT ARSIP</h2>
					</div>
					<?php echo form_open_multipart('Arsip/tambah'); ?>
					<div class="card-body card-block">
						<div class="form-group">
							<label class=" form-control-label">Nomor Dokumen</label>
							<div class="input-group">
								<?php echo form_error('no_dokumen', ' <div class="alert alert-danger" role="alert">', '</div>'); ?>
								<input class="form-control" name="no_dokumen" required>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Nomor Purchase Order</label>
							<div class="input-group">
								<?php echo form_error('no_po', ' <div class="alert alert-danger" role="alert">', '</div>'); ?>
								<input class="form-control" name="no_po" required>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Purchase Order</label>
							<div class='input-group date' id='datetimepicker'>
								<span class="input-group-addon">
									<span class="menu-icon fa fa-calendar"></span>
								</span>
								<input type='text' class="form-control" name="tgl_po" required/>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Kode Juru Beli</label>
							<div class="input-group">
								<select class="standardSelect" name="jurubeli" tabindex="-1" style="display: none;" required>
									<option value="" label="default"></option>
									<?php foreach ($jurubeli as $key) {?>
										<option value="<?php echo $key['kd_jurubeli']; ?>"><?php echo $key['kd_jurubeli']." | ".$key['nama_jurubeli']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Kode Proyek</label>
							<div class="input-group">
								<select class="standardSelect" name="proyek" tabindex="-1" style="display: none;" required>
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
								<select class="standardSelect" name="vendor" tabindex="-1" style="display: none;" required>
									<option value="" label="default"></option>
									<?php foreach ($vendor as $key) {?>
										<option value="<?php echo $key['kd_vendor']; ?>"><?php echo $key['kd_vendor']." | ".$key['nama_vendor']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Kode Rak</label>
							<div class="input-group">
								<select class="standardSelect" name="rak_ke" tabindex="-1" style="display: none;" required>
									<option value="" label="default"></option>
									<?php foreach ($rak_ke as $key) {?>
										<option value="<?php echo $key['kd_rak']; ?>"><?php echo $key['kd_rak']." | ".$key['nama_rak']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Posisi Rak Dokumen</label>
							<div class="input-group">
								<?php 
									$session_data=$this->session->userdata('logged_in');
	    							$akses=$session_data['hak_akses'];
									if($akses==1){?>
										<input class="form-control" name="rak" readonly>
									<?php }else{ ?>
										<input class="form-control" name="rak" required>
			
								<?php } ?>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Scan Dokumen (PDF File) <small>Ukuran Maks File 10MB</small></label>
							<div class="input-group">
									
										<input class="form-control" type="File"  name="dokumen" required>
							</div>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Deskripsi</label>
							<div class="input-group">
								<textarea onfocus="this.value=''" name="deskripsi" rows="5" class="form-control" required>
								</textarea>
							</div>
						</div>
						<?php if($akses==2){?>
						<div class="form-group">
							<label class=" form-control-label">Status Purchase Order</label>
							<div class="input-group">
								<div class="radio">
									<label for="radio2" class="form-check-label ">
										<input type="radio"  id="radio2" name="status" value="1" class="form-check-input" required>Selesai
									</label>
								</div>
								<div class="radio">
									<label for="radio2" class="form-check-label ">
										<input type="radio" id="radio2" name="status" value="2" class="form-check-input" required>Belum Selesai
									</label>
								</div>
							</div>
						</div>
					<?php }else{ }?>
						<button class="btn btn-info">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->view('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url('') ?>assets/js/main.js"></script>
<script src="<?php echo base_url('') ?>assets/js/lib/chosen/chosen.jquery.min.js"></script>

<script>
	jQuery(document).ready(function() {
		jQuery(".standardSelect").chosen({
			disable_search_threshold: 10,
			no_results_text: "Oops, nothing found!",
			width: "100%"
		});
	});
</script>
<script>
	$('#datetimepicker').datepicker({
		format: "dd-mm-yyyy"
	});
</script>

</body>


</html>