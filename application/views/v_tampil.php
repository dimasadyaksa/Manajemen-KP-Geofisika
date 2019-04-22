<!DOCTYPE html>
<html>
<body>
	<div class="col-md-9">
	<center><h1><strong>Daftar Nilai Mahasiswa</strong></h1></center>
	<center><strong><?php echo anchor('pembimbing_dosen/penilaian','Input Nilai'); ?></strong></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Materi</th>
			<th>Pemahaman</th>
			<th>Bahasa</th>
			<th>Catatan</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->NIM ?></td>
			<td><?php echo $u->Materi ?></td>
			<td><?php echo $u->PenugasanMateri ?></td>
			<td><?php echo $u->BahasaTataTulis ?></td>
			<td><?php echo $u->Catatan ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>