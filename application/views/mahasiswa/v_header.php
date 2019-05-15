<head>
    <title>Manajemen KP Geofisika</title>
    <script src="<?php echo base_url()?>assets/js/jquery_004.js"></script> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/js/common.js"></script>
    <script src="<?php echo base_url()?>assets/js/m.js"></script>
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/css.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/validationEngine.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker3.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ladda-themeless.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo%20itera%20oke.png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen.css">
    <style type="text/css">
  .file-field.big .file-path-wrapper {
    height: 3.2rem; 
  }
  .file-field.big .file-path-wrapper .file-path {
    height: 3rem; 
  }
body{ padding:20px;}

.custom-file-upload input[type="file"] {
    display: none;
}
.custom-file-upload .custom-file-upload1 {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
</style>
<link rel="stylesheet" type="text/css" href="css/file-upload.css" />
<script src="js/file-upload.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>

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
            <li><a href="http://sso.itera.ac.id/" target="_blank"><i class="fa fa-user"></i> <?php echo $this->session->userdata('email');?></a></li>
                        <li><a href="<?=site_url('login/logout')?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                    </ul>
      </div>  
  </nav>
</div>
</body>