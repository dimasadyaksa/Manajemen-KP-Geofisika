
    <div class="box-body">
      <form action="<?php echo site_url('Mahasiswa/tambah_TPraktik') ; ?>" method="post">
      <div id="home" class="tab-pane fade in active">
       	<table class="table table-striped">
       		<body>
            <tr>
              <td width="200px;">NIM </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="nim" id="nim" readonly="true" value="<?php echo $this->session->userdata('nim'); ?>" class="form-control" >
              </td>
            </tr>

       			<tr>
       				<td width="200px;">Nama Perusahaan </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="namaperusahaan" id="namaperusahaan" placeholder="NamaPerusahaan" class="form-control" value>
              </td>
     				</tr>

       			<tr>		
              <td width="200px">Bidang </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="bidang" id="bidang" placeholder="Bidang" class="form-control" value>
              </td>
       			</tr>

       			<tr>
       				<td width="200px">Alamat </td>
       				<td>:</td>
              <td colspan="2">
                <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" value>
              </td>
       			</tr>

            <tr>
              <td width="200px">Kontak </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="kontak" id="kontak" placeholder="Kontak" class="form-control" value>
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
        <h3 class="box-title text-center">Data Tentang Perusahaan </h3>
        <div class="box-body">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered" style="text-align: center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Bidang</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                
                </tr>
              </thead>

              <tbody>
                <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->NamaPerusahaan ?></td>
                  <td><?php echo $u->Bidang ?></td>
                  <td><?php echo $u->Alamat ?></td>
                  <td><?php echo $u->kontak ?></td>
           
                  <td> </td>
                  
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