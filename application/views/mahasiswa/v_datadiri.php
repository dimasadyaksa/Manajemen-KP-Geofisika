<div class="col-md-9">
  <div class="box box-success">
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">Data Diri</h3>
    </div>

    <div class="box-body">
      <div id="home" class="tab-pane fade in active">
        <form action="<?php echo $action; ?>" method="post">
       	<table class="table table-striped">
       		<body>
       			<tr>
              <div class="form-group">
       				<td width="200px;">Nama </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>">
       				</td>
       			</tr>

       			<tr>
       				<td width="200px;">NIM </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="NIM" id="NIM" placeholder="NIM" class="form-control" value="<?php echo $NIM; ?>">
       				</td>
       			</tr>

            <tr>
              <td width="200px;">No. Telepon </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="No_telp" id="No_telp" placeholder="Nomor Telepon" class="form-control" value="<?php echo $No_telp; ?>">
              </td>
            </tr>

       			<tr>
       				<td width="200px;">IP </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="IPK" id="IPK" placeholder="Nilai IP" class="form-control" value="<?php echo $IPK; ?>">
       				</td>
       			</tr>

       			<tr>
       				<td width="200px;">SKS yang Ditempuh </td>
       				<td>:</td>
       				<td colspan="2">
       					<input type="text" name="SKS" id="SKS" placeholder="SKS" class="form-control" value="<?php echo $SKS; ?>">
       				</td>
       			</tr>

            <tr>
              <td width="200px;">Angkatan </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="Angkatan" id="Angkatan" placeholder="Angkatan" class="form-control" value="<?php echo $Angkatan; ?>">
              </td>
            </tr>
       		</body>
       	</table>
      </div>
      <button type="submit" class="btn btn-warning pull-right">
        <i class="fa fa-save margin-r-5"></i>
        <h5 class="modal-title">SAVE</h5>     
      </button>
    </form>
    </br>
    </br>
    </br>
    </div>
  </div>
</div>
