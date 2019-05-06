<!--<div class="custom-file-upload">
    <h1>
 Unggah File Laporan Anda
</h1>
<label for="file-upload" class="custom-file-upload1">
    <i class="fa fa-cloud-upload"></i> File Upload
</label>	 
	-->
	<h1>
 Unggah File Laporan Anda
</h1>

<?php 
if($judul!=''&&isset($judul)){
	echo "<div class='alert alert-success' role='alert' id='uploadAlert' style='display: block;'>
	Anda sudah mengunggah laporan!<br/>
	Dengan Judul 
	<a href='".$url."'>".$judul."<a/>
</div>";
}else{
	echo "<div class='alert alert-danger' role='alert' id='uploadAlert' style='display: block;'>
	Anda belum mengunggah laporan!
</div>";
}
?>
	<?php echo form_open_multipart('mahasiswa/aksi_upload');?>
 	 <div class="form-group">
     <input type="text" name="judul" id="judul" class="form-control" value="" placeholder="Judul Laporan" required autofocus style="width: 25vw;">
	<input type="file" name="berkas" />
 	<p><strong> Format file *.pdf</strong></p>
	<br />
 
	<input type="submit" onclick="javascript:setLaporan()" value="upload" />
 	</div>
</form>
