<div class="col-md-9">
  <div class="box box-success">
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">Daftar Seminar</h3>
    
    </div>

  </br>
    <div class="box-body">
      <h4 style="text-align: center;">Tambah Daftar Seminar</h4>
      <form action="<?php echo site_url('Mahasiswa/tambah_daftarseminar') ; ?>" method="post">
      <div id="home" class="tab-pane fade in active">
       	<table class="table table-striped">
       		<body>
            <tr>
              <td width="200px;">NIM </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="nim" id="nim" placeholder=" NIM" class="form-control" >
              </td>
            </tr>

       			<tr>
       				<td width="200px;">Ruang </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="ruang" id="ruang" placeholder="ruang" class="form-control" value>
              </td>
     				</tr>

       			<tr>		
              <td width="200px">Gedung </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="gedung" id="gedung" placeholder="gedung" class="form-control" value>
              </td>
       			</tr>

       			<tr>
       				<td width="200px">Waktu </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="waktu" id="waktu" placeholder=" tahun-bulan-tanggal:jam:menit:detik" class="form-control" value>
              </td>
       			</tr>

       			

       		</body>
       	</table>
      </div>
    </div>

    <button type="submit" class="btn btn-warning pull-right">
      <i class="fa fa-save margin-r-5"></i>
      <h5 class="modal-title">Simpan</h5>     
    </button>
  </form>
    </br>
    </br>
    </br>

    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h3 class="box-title text-center">Jadwal Seminar</h3>
        <div class="box-body">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered" style="text-align: center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Ruang</th>
                  <th>Gedung</th>
                  <th>Waktu</th>
                
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
                  <td><?php echo $u->NIM ?></td>
                  <td><?php echo $u->Ruang ?></td>
                  <td><?php echo $u->Gedung ?></td>
                  <td><?php echo $u->waktu ?></td>
                
                  
                  <td><?php echo anchor('Mahasiswa/update/'.$u->NIM,'Update'); ?></td>
                  <td><?php echo anchor('Mahasiswa/hapus/'.$u->NIM,'Hapus'); ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>			
        </div>
      </div>
    </div>
  </div>
</div>