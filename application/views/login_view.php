<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APLIKASI PENGARSIPAN DIVISI SUPPLY CHAIN</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
    <link rel="shortcut icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body style="background-image:url('<?php echo base_url() ?>assets/images/bc.jpeg'); background-repeat: no-repeat;
  background-size: cover; ">
  <div style=" background-color: #1d1e4285; width: 100%; height: 100%;  position: absolute;
   top: 0;
   right: 0;
   bottom: 0;
   left: 0;"> 

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content col-2">
                <div class="login-form">
                    <div class="login-logo">
                        <img class="align-content" src="<?php echo base_url() ?>assets/images/LOGOPAL.png" alt="">
                        <label>APLIKASI PENGARSIPAN DIVISI SUPPLY CHAIN</label>
                    </div>
                    <?php echo form_open('login/CekLogin'); ?>
                    <?php echo validation_errors(); ?>
                        <div class="form-group">
                            <font face="Sans Serif">
                            <label>Username</label>
                            </font>
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <font face="Sans Serif">
                            <label>Password</label>
                            </font>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                       <!--  <div class="checkbox" hidden>
                            <label>
                                <input type="checkbox"> Ingat Saya
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">LOGIN</button>
                        <!-- <div class="register-link m-t-15 text-center">
                            <p hidden>Lupa Password ? <a href="#"> Lapor</a></p>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>
