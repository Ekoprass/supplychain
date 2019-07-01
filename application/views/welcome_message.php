<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>APLIKASI PENGARSIPAN DIVISI SUPPLY CHAIN PT.PAL INDONESIA</title>
	<link rel="apple-touch-icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
    <link rel="shortcut icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
	<style type="text/css">


/*<body style="background-image:url('<?php echo base_url() ?>assets/images/bc.jpeg'); background-repeat: no-repeat;
  background-size: cover; "> */
  body{
	/*background: url('<?php echo base_url()?>assets/images/ac.jpg');
	color: #fff;
	background-size:100%;
	background-repeat: no-repeat;*/
}



	/*body {*/
	/*	background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {*/
/*		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}*/
	</style>
</head>
<body>
<?php $this->view('template.php'); ?>
<div id="container">
	<h1>Selamat Datang di PT.PAL Indonesia</h1>
	<div class="container" style="padding-bottom:175px">
  <div id="WJSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
      <li data-target="#WJSlider" data-slide-to="1"></li>
      <li data-target="#WJSlider" data-slide-to="2"></li>
      <li data-target="#WJSlider" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="https://www.pal.co.id/uploads/1507705634TOc-Harkan%20KRI-Slider%20palcoid-2017.jpg" alt="slide1" width="1056" height="860">
        <div class="carousel-caption">
          <!-- <h3>Judul Gambar 1</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang pertama.</p> -->
        </div>
      </div>

      <div class="item">
        <img src="https://www.pal.co.id/uploads/1507707058vP1-Fasilitas-slider%20palcoid.jpg" alt="slide2" width="1056" height="860">
        <div class="carousel-caption">
          <!-- <h3>Judul Gambar 2</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke dua.</p> -->
        </div>
      </div>
   
      <div class="item">
        <img src="https://www.pal.co.id/uploads/1507703805NYo-provider-slider%20palcoid.jpg" alt="slide3" width="1056" height="860">
        <div class="carousel-caption">
          <!-- <h3>Judul Gambar 3</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke tiga.</p> -->
        </div>
      </div>

      <div class="item">
        <img src="https://www.pal.co.id/uploads/1508748377BcG-Desaign%20Tek-SLIDE%20palcoid%202017.jpg" alt="slide4" width="1056" height="860">
        <div class="carousel-caption">
          <!-- <h3>Judul Gambar 4</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke empat.</p> -->
        </div>
      </div>
  
    </div>

</div>

	<!-- <div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div> -->

	<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> -->
</body>
</html>