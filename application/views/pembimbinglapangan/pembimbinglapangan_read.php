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
        <h2 style="margin-top:0px">Pembimbinglapangan Read</h2>
        <table class="table">
	    <tr><td>IdPerusahaan</td><td><?php echo $idPerusahaan; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Kontak</td><td><?php echo $Kontak; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Posisi</td><td><?php echo $Posisi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pembimbinglapangan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>