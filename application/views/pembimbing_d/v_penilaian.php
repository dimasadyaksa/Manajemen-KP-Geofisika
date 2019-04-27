<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<div class="col-md-9">


<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">HALAMAN PENILAIAN</h1>
        <p><br></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#input_nilai_popup">Input Nilai</button>
        <div class="row">
          <div class="col-md-6" >
      </div>

      </div>
    <table class="table table-bordered" style="text-align:center">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Materi</th>
        <th>Pemahaman</th>
        <th>Bahasa</th>
        <th>Catatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    $no = 1;
    foreach($user as $u){ 
    ?>
      <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->NIM ?></td>
      <td><?php echo $u->Materi ?></td>
      <td><?php echo $u->PenugasanMateri ?></td>
      <td><?php echo $u->BahasaTataTulis ?></td>
      <td><?php echo $u->Catatan ?></td>          
      <td><?php echo anchor('pembimbing_dosen/hapus/'.$u->NIM,'Hapus'); ?>  
      </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>

<!-- Modal -->
<div id="input_nilai_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Input Nilai</h4>
              </div>

              <div class="modal-body">
                <form action="<?php echo site_url('pembimbing_dosen/tambah_aksi') ; ?>" method="post">
                  <p style="margin-left">
              <b>KRITERIA PENILAIAN</b>
              <br>
              <font color="grey"><p><h5>KISARAN PENILAIAN   : 100&gt;=A&gt;=80, 80&gt;=B&gt;=60, 60&lt;C</h5></p></font><br>
            </p>
                        <label>NIM Mahasiswa</label><br>
                        <input class="form-control" type="text" name="nim"><br>
      
                        <label>Materi</label><br>
                        <input class="form-control" type="text" name="materi"><br>

                        <label>Pemahaman Materi</label><br>
                        <input class="form-control" type="text" name="penugasanmateri"><br>


                        <label>Bahasa dan Tata Penulisan</label><br>
                        <input class="form-control" type="text" name="bahasatatatulis"><br><br>
                        
                        <label for="Catatan">Catatan</label><br>
                        <textarea name="catatan" id="catatan" cols="60" rows="5"></textarea><br><br>
                        <div align="center">
                        <input class="btn btn-success" type="submit" value="Tambah">
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                      </div>
                  </form> 
              </div>
            </div>