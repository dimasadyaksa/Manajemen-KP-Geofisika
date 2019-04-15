<div class="col-md-9">
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">LOGBOOK</h1>  
      <br><br>
    <div class="col-md-9">
        <label>Nama : </label><br>
         <label>NIM : </label><br>
          <label>Tempat KP : </label><br><br>
          <h4><p align="center">Daftar Logbook Mahasiswa</p></h4>
    </div>

    <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Tugas/Hasil/Hal yang dikerjakan</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>13 Juni 2019</td>
        <td>09.00</td>
        <td>16.00</td>
        <td>Membuat frontend web</td>
        <td>
          <a role="button" class="label label-success" href="<?php echo site_url('Pembimbing_Lapangan/logbook')?>">Di Terima</a>
          <a role="button" class="label label-danger" href="<?php echo site_url('Pembimbing_Lapangan/logbook')?>">Di Tolak</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>