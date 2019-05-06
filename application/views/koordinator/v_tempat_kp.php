<div class="box-header">
	<i class="fa fa-briefcase" aria-hidden="true"></i>
	<h3 class="box-title text-center">Tambah Tempat KP</h3>
	
</div>
<div class="box-body">
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_tempatKP">Tambah Tempat Praktik</button>
	<p style="padding-bottom: 10px"></p>
	<h4 style="text-align: left;">Daftar Nama Perusahaan Kerja Praktik</h4>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="text-left">No</th>
				<th class="text-left">Nama Perusahaan</th>
				<th class="text-left">Bidang</th>
				<th class="text-left">Alamat Perushaan</th>
				<th class="text-left">Kontak Perushaan</th>
				<th class="text-left">Aksi</th>
			</tr>
		</thead>
		<?php
		$start = 0;
		foreach ($tempatkerja_data as $tempatkerja)
		{
			?>
			<tr>
				<td width="80px"><?php echo ++$start ?></td>
				<td><?php echo $tempatkerja->NamaPerusahaan ?></td>
				<td><?php echo $tempatkerja->Bidang ?></td>
				<td><?php echo $tempatkerja->Alamat ?></td>
				<td><?php echo $tempatkerja->kontak ?></td>
				<td style="text-align:center" width="200px">

					 <button type="button" class="btn btn-info" data-toggle="modal" id="<?php site_url ('Koordinator/update_tempatKP/.$tempatkerja->idPerusahaan') ?>" data-target="#update_tempatKP">Update</button>	

					 <?php 
    				 //echo anchor(site_url('tempatkerja/update/'.$tempatkerja->idPerusahaan),'Update'); 
    				// echo anchor(site_url('tempatkerja/update/'.$tempatkerja->idPerusahaan),'Update','$('#thankyouModal').modal('show')'; 
					echo ' | '; 
					echo anchor(site_url('Koordinator/delete_tempatKP/'.$tempatkerja->idPerusahaan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
					?>
				</td>
			</tr>
			<?php
		}
		?>
	</table>


	<div class="modal fade" id="tambah_tempatKP" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Tempat Praktik</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo $action; ?>" method="post">
						<div class="form-group">
							<label for="varchar">NamaPerusahaan <?php echo form_error('NamaPerusahaan') ?></label>
							<input type="text" class="form-control" name="NamaPerusahaan" id="NamaPerusahaan" placeholder="NamaPerusahaan" value="<?php echo $NamaPerusahaan; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Bidang <?php echo form_error('Bidang') ?></label>
							<input type="text" class="form-control" name="Bidang" id="Bidang" placeholder="Bidang" value="<?php echo $Bidang; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
							<input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
						</div>
						<div class="form-group">
							<label for="int">Kontak <?php echo form_error('kontak') ?></label>
							<input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?php echo $kontak; ?>" />
						</div>
						<input type="hidden" name="idPerusahaan" value="<?php echo $idPerusahaan; ?>" /> 
						<p style="padding-bottom: 10px"></p>
						<div align="center">
							<button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
							<a href="<?php echo site_url('Koordinator') ?>" class="btn btn-default">Cancel</a>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>


	<!-- Update data Tempat KP -->
	<?php
		$start = 0;
		foreach ($tempatkerja_data as $tempatkerja)
		{
			?>
	<div class="modal fade" id="update_tempatKP" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Update Tempat Praktik</h4>
				</div>
				<div class="modal-body">
					<form action="/action_page.php">
						<div class="form-group">
							<label for="varchar">NamaPerusahaan <?php echo form_error('NamaPerusahaan') ?></label>
							<input type="text" class="form-control" name="NamaPerusahaan" id="NamaPerusahaan" placeholder="NamaPerusahaan" value="<?php echo $NamaPerusahaan; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Bidang <?php echo form_error('Bidang') ?></label>
							<input type="text" class="form-control" name="Bidang" id="Bidang" placeholder="Bidang" value="<?php echo $Bidang; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
							<input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
						</div>
						<div class="form-group">
							<label for="int">Kontak <?php echo form_error('kontak') ?></label>
							<input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?php echo $kontak; ?>" />
						</div>
						<p style="padding-bottom: 10px"></p>
						<div align="center">
							<button type="button" class="btn btn-success">Update</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
<?php
		}
		?>

	<div class="modal fade" id="delete_tempatKP" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Hapus Tempat Praktik</h4>
				</div>
				<div class="modal-body">
								<!-- Data di dalam form nantinya akan otomatis terisi
									dengan data yang ada di database -->
									<a>Apakah anda yakin akan menghapus?</a>
									<p style="padding-bottom: 10px"></p>
									<div align="center">
										<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
										<button type="button" class="btn btn-danger">Delete</button>
									</div>
								</div>
							</div>

						</div>
					</div>