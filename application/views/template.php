<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APLIKASI PENGARSIPAN DIVISI SUPPLY CHAIN PT.PAL INDONESIA</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
    <link rel="shortcut icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/lib/chosen/chosen.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url().'assets/jquery-datatables/jquery.dataTables.yadcf.css'?>" rel="stylesheet" type="text/css"/>
   
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<div class="content">

<!-- gawe button exel -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/buttons/buttons.dataTables.css'?>">


<!--pdf viewer-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">



    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel" >
        <nav class="navbar navbar-expand-lg navbar-default" >
            <div id="main-menu" class="main-menu collapse navbar-collapse" style="margin-bottom: 100%">
                <ul class="nav navbar-nav">
                   
               <?php foreach ($menus as $key ) { 
                        if ($key['parent']==0) {?>
                        <li class="menu-title" style="background-color: #03428b; color: #fff"><?php echo $key['menu']; ?></li>
                    <?php }
                        if ($key['parent']>0) {?>
                     <li>
                        <a style="color:#9e9c9c; font-size:15px; line-height:50px;padding-top:5px;padding-bottom:5px" onMouseOver="this.style.color='#03428b'"   onMouseOut="this.style.color='#9e9c9c'" href="<?php echo site_url('')."/".$key['url'] ?>"><b> <i style="color:#9e9c9c; font-size: 25px" onMouseOver="this.style.color='#03428b'"  onMouseOut="this.style.color='#9e9c9c'" class="menu-icon <?php echo $key['icon']; ?>"></i><?php echo $key['menu']; ?></b></a>
                    </li>
                <?php }} ?>
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel" >
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo site_url() ?>/home"><img src="<?php echo base_url() ?>assets/images/logopal.png" alt="Logo"></a>
                  <!--   <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <h2>                      
                        <div class="pull-right" style="margin-top: -18px;">
                            <a class="nav-link" style="color:#03428b" onMouseOver="this.style.color='#c2c1c1'"   onMouseOut="this.style.color='#03428b'" href="<?php echo site_url() ?>/login/logout">
                            <?php  
                                $session_data=$this->session->userdata('logged_in');
                                echo $akses=$session_data['nama_petugas'];
                            ?>
                                <i class="fa fa-power-off"></i>
                            </a>
                        </div>
                    </h2>

                 <!--    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="<?php echo site_url() ?>/login/logout"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> -->

                </div>
            </div>
        </header>