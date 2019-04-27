<div class="col-md-9">
  <div class="box box-success">
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">LogBook</h3>
    
    </div>

  </br>
    <div class="box-body">
      <form action="<?php echo site_url('Mahasiswa/tambah_logbook') ; ?>" method="post">
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
       				<td width="200px;">Tanggal </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="tanggal" id="tgl" placeholder=" tahun-bulan-tanggal" class="form-control" value>
              </td>
     				</tr>

       			<tr>		
              <td width="200px">Jam Mulai </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="jammulai" id="jam_mulai" placeholder=" jam:menit:detik" class="form-control" value>
              </td>
       			</tr>

       			<tr>
       				<td width="200px">Jam Selesai </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="jamselesai" id="jam_selesai" placeholder=" jam:menit:detik" class="form-control" value>
              </td>
       			</tr>

       			<tr>
       				<td width="200px;">Tugas/Hasil/Hal yang dikerjakan </td>
       				<td>:</td>
       				<td colspan="2">
       					<textarea name="kegiatan" id="tugas" placeholder=" Tugas/Hasil" class="form-control" ></textarea>
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
        <h3 class="box-title text-center">Data Tentang LogBook</h3>
        <div class="box-body">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered" style="text-align: center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Tugas/Hasil/Hal yang dikerjakan</th>
                  <th>TTD Pembimbing Lapangan</th>
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
                  <td><?php echo $u->Tanggal ?></td>
                  <td><?php echo $u->JamMulai ?></td>
                  <td><?php echo $u->JamSelesai ?></td>
                  <td><?php echo $u->Kegiatan ?></td>
                  <td> </td>
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