<!--<div class="custom-file-upload">
    <h1>
 Unggah File Laporan Anda
</h1>
<label for="file-upload" class="custom-file-upload1">
    <i class="fa fa-cloud-upload"></i> File Upload
</label>	 
	-->
	<?php echo form_open_multipart('mahasiswa/aksi_upload');?>
 
	<input type="file" name="berkas" />
 
	<br /><br />
 
	<input type="submit" value="upload" />
 
</form>
