<script src="<?php echo base_url()?>assets/js/jquery_004.js"></script> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
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

<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>