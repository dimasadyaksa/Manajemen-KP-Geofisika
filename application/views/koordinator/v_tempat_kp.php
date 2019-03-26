<div class="box-header">
	<i class="fa fa-briefcase" aria-hidden="true"></i>
	<h3 class="box-title text-center">Tambah Tempat KP</h3>
</div>
<div class="box-body">
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_tempatKP">Tambah Tempat Praktik</button>
	<p style="padding-bottom: 10px"></p>
	<h4 style="text-align: center;">Daftar Nama Perusahaan Kerja Praktik</h4>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="text-left">No</th>
				<th class="text-left">Nama Perusahaan</th>
				<th class="text-left">Bidang</th>
				<th class="text-left">Kontak Perushaan</th>
				<th class="text-left">Alamat Perushaan</th>
				<th class="text-left">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>PT. Bukit Asam</td>
				<td>Pertambangan</td>
				<td>+62 85678899</td>
				<td>Lampung</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#update_tempatKP" class="btn btn-info">Edit</button>
					<button type="button" data-toggle="modal" data-target="#delete_tempatKP" class="btn btn-danger">Delete</button>
				</td>
			</tr>
		</tbody>
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
					<form action="/action_page.php">
						<div class="form-group">
							<label for="nama">Nama Perusahaan</label>
							<input type="text" class="form-control" id="nama">
						</div>
						<div class="form-group">
							<label for="Username">Bidang</label>
							<input type="text" class="form-control" id="Username">
						</div>
						<div class="form-group">
							<label for="pwd">Kontak Perusahaan</label>
							<input type="text" class="form-control" id="pwd">
						</div>
						<div class="form-group">
							<label for="pwd">Alamat Perusahaan</label>
							<input type="text" class="form-control" id="pwd">
						</div>
						<p style="padding-bottom: 10px"></p>
						<div align="center">
							<button type="button" class="btn btn-success">Tambah</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
	<!-- Update data Tempat KP -->
	<div class="modal fade" id="update_tempatKP" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Update Tempat Praktik</h4>
				</div>
				<div class="modal-body">
								<!-- Data di dalam form nantinya akan otomatis terisi
									dengan data yang ada di database -->
									<form action="/action_page.php">
										<div class="form-group">
											<label for="nama">Nama Perusahaan</label>
											<input type="text" class="form-control" id="namaPersuahaan">
										</div>
										<div class="form-group">
											<label for="Username">Bidang Perusahaan</label>
											<input type="text" class="form-control" id="BPerusahaan">
										</div>
										<div class="form-group">
											<label for="pwd">Kontak Perusahaan</label>
											<input type="text" class="form-control" id="KPerusahaan">
										</div>
										<div class="form-group">
											<label for="pwd">Alamat Perusahaan</label>
											<input type="text" class="form-control" id="APerusahaan">
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