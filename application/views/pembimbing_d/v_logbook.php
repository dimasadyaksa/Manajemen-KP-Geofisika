    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">LOGBOOK</h1>  
      <br><br>
    <?php 
      $start = 0;
    foreach ($detail as $row)
        { ?>
    <div class="col-md-9">
        <label>Nama : <?php echo $row->Nama ?></label><br>
         <label>NIM : <?php echo $row->NIM ?></label><br><br><br>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo ++$start ?></td>
        <td><?php echo $row->Tanggal ?></td>
        <td><?php echo $row->JamMulai ?></td>
        <td><?php echo $row->JamSelesai ?></td>
        <td><?php echo $row->Kegiatan ?></td>
        
      </tr>
    </tbody>
  </table>
  <?php } ?>
</div>
</div>
