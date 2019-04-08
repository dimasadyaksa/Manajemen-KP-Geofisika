<head>
    <title>Manajemen KP Geofisika</title>
    <script src="<?php echo base_url()?>assets/js/jquery_004.js"></script> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/css.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/validationEngine.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker3.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ladda-themeless.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo%20itera%20oke.png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen.css">
    
  <style type="text/css"></style></head>
 <body>
<div class="container base">
  <div class="container">
      <div class="row ">
        <div class="col-md-1">
            <a href="http://siakad.itera.ac.id/">
              <img src="<?php echo base_url()?>assets/img/logo-itera.png" style="margin-bottom:10px; " width="70px">
            </a>
        </div>
        <div class="col-md-5">
          <h3>Manajemen KP Geofisika</h3>
          <p><em>"Institut Teknologi Sumatera"</em></p>
        </div>
      </div>
  </div>
</div>

  <div class="container top">
  <nav class="navbar navbar-inverse">  
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=site_url('login')?>">
              <i class="fa fa-user"> Login</i>
                </a>
            </li>
        </ul>
      </div>  
  </nav>
</div>
</body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Siapa Anda?</h4>
      </div>
      <div class="modal-body">
        <a href="<?=site_url('Login')?>">
          <button class="btn btn-success btn-lg">Mahasiswa</button>
        </a>
        <a href="<?=site_url('Login')?>">
          <button class="btn btn-primary btn-lg">Dosen Pembimbing</button>
        </a>
        <a href="<?=site_url('Login')?>">
          <button class="btn btn-info btn-lg">Pembimbing Lapangan</button>
        </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

