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
      <tr>
        <td>1</td>
        <td>14116001</td>
        <td style="text-align: left">Retno Monika</td>
        <td>2016</td>
        <td><a href="<?php echo site_url('Pembimbing_Dosen/logbook')?>">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lihat</button></a></td>
        <!-- <td><a href="<?php echo site_url('Logbook_Mahasiswa/Retno_Monika')?>">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lihat</button>
        </a></td> -->
      </tr>

       <tr>
        <td>2</td>
        <td style="text-align: left"></td>
        <td></td>
        <td></td>
        <td><a href="<?php echo site_url('Pembimbing_Dosen/logbook')?>">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lihat</button></a></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>