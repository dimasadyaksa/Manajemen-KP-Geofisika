<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="col-md-9">
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">Daftar Nilai Mahasiswa</h1>
        <div class="row">
        	<div class="col-md-6" >
			</div>

    	</div>
      <h4><p align="center">Daftar Nilai Mahasiswa</p></h4>
    <table class="table table-bordered" style="text-align: center">
    <thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Pemahaman</th>
			<th>Kemampuan Penugasan</th>
			<th>Komunikasi</th>
			<th>Menulis Laporan</th>
			<th>Adaptasi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->NIM ?></td>
			<td><?php echo $u->Pemahaman ?></td>
			<td><?php echo $u->KemampuanPenugasan ?></td>
			<td><?php echo $u->Komunikasi ?></td>
			<td><?php echo $u->MenulisLaporan ?></td>
			<td><?php echo $u->Adaptasi ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>