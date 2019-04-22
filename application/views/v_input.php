<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo site_url('Nilai/tambah_aksi') ; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Materi</td>
				<td><input type="text" name="materi"></td>
			</tr>
			<tr>
				<td>Penugasan</td>
				<td><input type="text" name="penugasanmateri"></td>
			</tr>
			<tr>
				<td>Bahasa</td>
				<td><input type="text" name="bahasatatatulis"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>