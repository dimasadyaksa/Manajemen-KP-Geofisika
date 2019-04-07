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
        <h2 style="margin-top:0px">Pembimbingdosen <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdUser <?php echo form_error('idUser') ?></label>
            <input type="text" class="form-control" name="idUser" id="idUser" placeholder="IdUser" value="<?php echo $idUser; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Spesialis <?php echo form_error('Spesialis') ?></label>
            <input type="text" class="form-control" name="Spesialis" id="Spesialis" placeholder="Spesialis" value="<?php echo $Spesialis; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kontak <?php echo form_error('kontak') ?></label>
            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?php echo $kontak; ?>" />
        </div>
	    <input type="hidden" name="NIP" value="<?php echo $NIP; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pembimbingdosen') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>