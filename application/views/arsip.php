<?php $this->view('template.php'); ?>
<div class="content">
    <div class="animated fadeIn">
       <div class="row">
		<div class="col-xs-12">
			<div class="card">
				<div class="card-header">
					<h2>INPUT ARSIP</h2>
				</div>
				<div class="card-body card-block">
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
						<label class=" form-control-label">Description</label>
						<div class="input-group">
							<textarea name="deskripsi" rows="5" placeholder="Description" class="form-control">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label>Tanggal Purchase Order</label>
                        <div class='input-group date' id='datetimepicker'>
                            <span class="input-group-addon">
                               <span class="menu-icon fa fa-calendar"></span>
                            </span>
                            <input type='text' class="form-control" name="tgl_po"/>
                        </div>
                    </div>
					<div class="form-group">
						<label class=" form-control-label">Kode Juru Beli</label>
						<div class="input-group">
							<select class="standardSelect" name="jurubeli" tabindex="-1" style="display: none;">
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
							<select class="standardSelect" name="proyek" tabindex="-1" style="display: none;">
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
							<select class="standardSelect" name="vendor" tabindex="-1" style="display: none;">
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
							<select class="standardSelect" name="rak" tabindex="-1" style="display: none;">
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
							<input class="form-control" type="File"  name="dokumen">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Status Purchase Order</label>
						<div class="input-group">
							<div class="radio">
                                <label for="radio2" class="form-check-label ">
                                	<input type="radio"  id="radio2" name="status" value="1" class="form-check-input">Selesai
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                	<input type="radio" id="radio2" name="status" value="2" class="form-check-input">Belum Selesai
                                </label>
                            </div>
						</div>
					</div>
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
	$('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
</script>

</body>


</html>