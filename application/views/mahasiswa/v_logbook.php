
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/timepicker/assets/timepicker.css">
<div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">Logbook</h3>

      <form action="<?php echo site_url('Mahasiswa/tambah_logbook') ; ?>" method="post">
      <div id="home" class="tab-pane fade in active">
       	<table class="table table-striped">
       		<body>
            <tr>
              <td width="200px;" >NIM</td>
              <td>:</td>
              <td colspan="2">
                <input type="text"readonly name="nim" id="nim" value="<?php echo $this->session->userdata('nim'); ?> " class="form-control" >
              </td>
            </tr>

       			<tr>
       				<td width="200px;">Tanggal </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="tanggal" id="tanggal" placeholder=" tahun-bulan-tanggal" class="form-control" value>
              </td>
     				</tr>

       			<tr>		
              <td width="200px">Jam Mulai </td>
       				<td>:</td>
              <td colspan="2">
                <div class="bootstrap-timepicker">
                      <div class="form-group">
                          <div class="input-group input-group-lg">
                            <input type="text" id="jammulai" class="form-control timepicker">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </div>
                          </div>
                      </div>
                  </div>
              </td>
       			</tr>

       			<tr>
       				<td width="200px">Jam Selesai </td>
       				<td>:</td>
              <td colspan="2">
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                          <div class="input-group input-group-lg">
                            <input type="text" id="jamselesai" class="form-control timepicker">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </div>
                          </div>
                      </div>
                  </div>
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

    <button type="submit" onclick="submitLogbook()" class="btn btn-warning pull-right">
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
                  <td> <button type="submit" onclick="hapusLogbook('<?php echo $u->Tanggal ?>')" class="btn btn-danger pull-right">
                    <h5 class="modal-title">Hapus</h5>     
                  </button> </td>
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
<script src="<?php echo base_url(); ?>assets/timepicker/assets/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/timepicker/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/timepicker/assets/timepicker.js"></script>
<script>
$(function(){
  $('.timepicker').timepicker({
        showInputs: false
    })
});
</script>