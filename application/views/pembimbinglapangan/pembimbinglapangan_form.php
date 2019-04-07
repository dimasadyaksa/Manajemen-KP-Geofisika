<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pembimbinglapangan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdPerusahaan <?php echo form_error('idPerusahaan') ?></label>
            <input type="text" class="form-control" name="idPerusahaan" id="idPerusahaan" placeholder="IdPerusahaan" value="<?php echo $idPerusahaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kontak <?php echo form_error('Kontak') ?></label>
            <input type="text" class="form-control" name="Kontak" id="Kontak" placeholder="Kontak" value="<?php echo $Kontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Posisi <?php echo form_error('Posisi') ?></label>
            <input type="text" class="form-control" name="Posisi" id="Posisi" placeholder="Posisi" value="<?php echo $Posisi; ?>" />
        </div>
	    <input type="hidden" name="idDosenL" value="<?php echo $idDosenL; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pembimbinglapangan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>