<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ARSIP</title>
	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/lib/chosen/chosen.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.css">
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('') ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('') ?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
		<div class="col-xs-12">
			<div class="card">
				<div class="card-header">
					<strong>Masked Input</strong> <small> Small Text Mask</small>
				</div>
				<div class="card-body card-block">
					<div class="form-group">
						<label class=" form-control-label">Nomor Dokumen</label>
						<div class="input-group">
							<input class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Nomor Purchase Order</label>
						<div class="input-group">
							<input class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Description</label>
						<div class="input-group">
							<textarea name="Description" rows="5" placeholder="Description" class="form-control">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Tanggal Purchase Order</label>
						<div class="input-group">
							<input class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Kode Juru Beli</label>
						<div class="input-group">
							<select class="standardSelect" tabindex="-1" style="display: none;"></select>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Kode Proyek</label>
						<div class="input-group">
							<select class="standardSelect" tabindex="-1" style="display: none;"></select>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Kode Vendor</label>
						<div class="input-group">
							<select class="standardSelect" tabindex="-1" style="display: none;"></select>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Posisi Rak Dokumen</label>
						<div class="input-group">
							<select class="standardSelect" tabindex="-1" style="display: none;"></select>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Tanggal Masuk</label>
						<div class="input-group">
							<input class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>tanggal</label>
                        <div class='input-group date' id='datetimepicker'>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type='text' class="form-control" />
                        </div>
                    </div>
					<div class="form-group">
						<label class=" form-control-label">Scan Dokumen(PDF File)</label>
						<div class="input-group">
							<input class="form-control" type="File">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Status Purchase Order</label>
						<div class="input-group">
							<lable for="inline-radio1" class="form-check-label">
								<input type="radio" name="Status" value="1" id="inline-radio1" class="form-check-input">Selesai
							</lable>
							<lable for="inline-radio2" class="form-check-label">
								<input type="radio" name="Status" value="2" class="form-check-input">Belum Selesai
							</lable>
						</div>
					</div>
				</div>
			</div>
		</div>

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