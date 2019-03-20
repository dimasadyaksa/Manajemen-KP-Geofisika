		<div class="box-header">
			<i class="fa fa-user-circle" aria-hidden="true"></i>
			<h1 class="box-title text-center">Tambah Pengguna Sistem Manajamen Kerja Praktik</h>
			</div>
			<div class="box-body">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_user_popup">Tambah User</button>
				<p style="padding-bottom: 10px"></p>
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-left">No</th>
							<th class="text-left">Nama</th>
							<th class="text-left">Username</th>
							<th class="text-left">Password</th>
							<th class="text-left">Status</th>
							<th class="text-left">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Nandar</td>
							<td>munand</td>
							<td>********</td>
							<td>Mahasiswa</td>
							<td>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Edit</button>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_popup">Delete</button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Dimas</td>
							<td>username1</td>
							<td>********</td>
							<td>Pembimbing Lapangan</td>
							<td>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Edit</button>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_popup">Delete</button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Rade</td>
							<td>username2</td>
							<td>********</td>
							<td>Pembimbing Dosen</td>
							<td>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Edit</button>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_popup">Delete</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="modal fade" id="tambah_user_popup" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Tambah User</h4>
							</div>
							<div class="modal-body">
								<form action="/action_page.php">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" class="form-control" id="nama">
									</div>
									<div class="form-group">
										<label for="Username">Username</label>
										<input type="text" class="form-control" id="Username">
									</div>
									<div class="form-group">
										<label for="pwd">Password</label>
										<input type="text" class="form-control" id="pwd">
									</div>
									<div class="form-group">
										<label for=statusUser>Status</label>
										<select class="form-control">
											<option>-Pilih-</option>
											<option>Mahasiswa</option>
											<option>Pembimbing Dosen</option>
											<option>Pembimbing Lapangan</option>
										</select>
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
				<div class="modal fade" id="update_user_popup" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Update User</h4>
							</div>
							<div class="modal-body">
								<!-- Data di dalam form nantinya akan otomatis terisi
									dengan data yang ada di database -->
									<form action="/action_page.php">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" class="form-control" id="nama">
										</div>
										<div class="form-group">
											<label for="Username">Username</label>
											<input type="text" class="form-control" id="Username">
										</div>
										<div class="form-group">
											<label for="pwd">Password</label>
											<input type="text" class="form-control" id="pwd">
										</div>
										<div class="form-group">
											<label for=statusUser>Status</label>
											<select class="form-control">
												<option>-Pilih-</option>
												<option>Mahasiswa</option>
												<option>Pembimbing Dosen</option>
												<option>Pembimbing Lapangan</option>
											</select>
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
					<div class="modal fade" id="delete_user_popup" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Delete User</h4>
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