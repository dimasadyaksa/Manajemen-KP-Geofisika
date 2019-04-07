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
        <h2 style="margin-top:0px">Pembimbingdosen Read</h2>
        <table class="table">
	    <tr><td>IdUser</td><td><?php echo $idUser; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Spesialis</td><td><?php echo $Spesialis; ?></td></tr>
	    <tr><td>Kontak</td><td><?php echo $kontak; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pembimbingdosen') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>