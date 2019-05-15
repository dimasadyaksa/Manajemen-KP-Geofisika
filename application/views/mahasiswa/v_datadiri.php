<div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">Data Diri</h3>

    <div class="box-body">
      <div id="home" class="tab-pane fade in active">
       	<table class="table table-striped">
       		<body>
       			<tr>
       				<td width="200px;">Nama </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="nama" id="nama" value="<?php if(isset($user->Nama)){echo $user->Nama;}else{echo 'Nama Lengkap';}?>" class="form-control" value>
       				</td>
       			</tr>

       			<tr>
       				<td width="200px;">NIM </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="nim" id="nim" readonly="true" placeholder="NIM" class="form-control" value="<?php echo $this->session->userdata('nim'); ?>">
       				</td>
       			</tr>

       			<tr>
       				<td width="200px;">IP </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="ip" id="ip"  value="<?php if(isset($user->IPK)){echo $user->IPK;}else{echo 'Nilai IP';}?>" class="form-control" value>
       				</td>
       			</tr>

       			<tr>
       				<td width="200px;">SKS yang Ditempuh </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="sks" id="sks" value="<?php if(isset($user->SKS)){echo $user->SKS;}else{echo 'SKS';}?>" class="form-control" value>
       				</td>
       			</tr>
            <tr>
              <td width="200px;">Angkatan </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="angkatan" id="angkatan"  value="<?php if(isset($user->Angkatan)){echo $user->Angkatan;}else{echo 'Angkatan';}?>" class="form-control" value>
              </td>
            </tr>
            <tr>
              <td width="200px;">Nomor HP </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="hp" id="hp"  value="<?php if(isset($user->No_telp)){echo $user->No_telp;}else{echo 'Nomor HP';}?>" class="form-control" value>
              </td>
            </tr>
            <tr>
            
       		</body>
       	</table>
      </div>
      <button type="submit" onclick="permohonanKP()" class="btn btn-warning pull-right">
        <i class="fa fa-save margin-r-5"></i>
        <h5 class="modal-title">Simpan</h5>     
      </button>
    </br>
    </br>
    </br>
    </div>
  </div>
</div>