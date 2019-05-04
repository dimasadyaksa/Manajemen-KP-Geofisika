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
        <h2 style="margin-top:0px">Laporan_files <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">NIM <?php echo form_error('NIM') ?></label>
            <input type="text" class="form-control" name="NIM" id="NIM" placeholder="NIM" value="<?php echo $NIM; ?>" />
        </div>
	    <div class="form-group">
            <label for="url">Url <?php echo form_error('url') ?></label>
            <textarea class="form-control" rows="3" name="url" id="url" placeholder="Url"><?php echo $url; ?></textarea>
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporan_files') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>