<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="col-md-9">


<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">LOGBOOK</h1>
        </div>
      <h4><p align="center">Daftar Logbook Mahasiswa</p></h4>
    <table class="table table-bordered" style="text-align: center">
    <thead>
      <tr>
        <th style="text-align: center">No</th>
        <th style="text-align: center">NIM</th>
        <th style="text-align: left">Nama</th>
        <th style="text-align: center">Angkatan</th>
        <th style="text-align: center">Logbook</th>
      </tr >
    </thead>
    <tbody>
      <?php foreach ($daftar_logbook as $daftarlogbook)
        { ?>
      <tr>
        <td><?php echo ++$start ?></td>
        <td><?php echo $daftarlogbook->NIM ?></td>
        <td><?php echo $daftarlogbook->Nama ?></td>
        <td><?php echo $daftarlogbook->Angkatan ?></td>
        <td><a href="<?php echo site_url('Pembimbing_Dosen/logbook/'.$daftarlogbook->NIM)?>">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lihat</button></a></td>
        <!-- <td><a href="<?php echo site_url('Logbook_Mahasiswa/Retno_Monika')?>">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lihat</button>
        </a></td> -->
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
