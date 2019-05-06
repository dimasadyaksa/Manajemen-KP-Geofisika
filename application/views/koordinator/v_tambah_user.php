		<div class="box-header">
			<i class="fa fa-user-circle" aria-hidden="true"></i>
			<h1 class="box-title text-center">Tambah Pengguna Sistem Manajamen Kerja Praktik</h>
			</div>
			<div class="box-body">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_user_popup">Tambah User</button>
				<p style="padding-bottom: 10px"></p>
				<h4 style="text-align: center;">Daftar User Sistem</h4>
				<br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-left">No</th>
							<th class="text-left">Email</th>
							<th class="text-left">Password</th>
							<th class="text-left">Status</th>
							<th class="text-left">Action</th>
						</tr>
					</thead>
					<tbody id="list">
						
					</tbody>
				</table>
				<div class="modal fade" id="tambah_user_popup" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close"  data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Tambah User</h4>
							</div>
							<div class="modal-body">
								<form action="/action_page.php">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" class="form-control" id="Nama">
									</div>
									<div class="alert alert-danger" id="nipAlert" style="display: none;"  role="alert">
										NIP/NIM sudah ada!  
									</div>
									<div class="form-group">
										<label for="pwd">NIM/NIP</label>
										<input type="text" class="form-control" oninput="javascript:detectNIP()" id="nim">
									</div>
									<div class="form-group">
										<label for="Email">Email</label>
										<input type="text" class="form-control" id="Email" oninput="javascript:detectEmail()">
									</div>

									<div class="alert alert-danger" id="emailAlert" style="display: none;" role="alert">
									  Email sudah digunakan!
									</div>
									<div class="form-group">
										<label for="pwd">Password</label>
										<input type="text" class="form-control" id="Password">
									</div>
									<div class="form-group">
										<label for=statusUser>Status</label>
										<select class="form-control" id="status">
											<option>-Pilih-</option>
											<option>Mahasiswa</option>
											<option>Pembimbing Dosen</option>
											<option>Pembimbing Lapangan</option>
										</select>
									</div>
									<p style="padding-bottom: 10px"></p>
									<div align="center">
										<button type="button" onclick="addUser()" data-dismiss="modal" class="btn btn-success">Tambah</button>
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
											<label for="Email">Email</label>
											<input type="text" class="form-control" id="emailUpdt" onkeydown="javascript:detectEmail()">
										</div>
										<div class="form-group">
											<label for="pwd">Password</label>
											<input type="text" class="form-control" id="passwordUpdt">
										</div>
										<div class="form-group" style="display: none;">
											<label for=statusUser>Status</label>
											<select class="form-control">
												<option>-Pilih-</option>
												<option value="Mahasiswa" id="optMhs">Mahasiswa</option>
												<option value="Pembimbing Dosen" id="optPD">Pembimbing Dosen</option>
												<option value="Pembimbing Lapangan" id="optPL">Pembimbing Lapangan</option>
											</select>
										</div>
										<p style="padding-bottom: 10px"></p>
										<div align="center">
											<button type="button" class="btn btn-success" onclick="updateUser()" data-dismiss="modal" >Update</button>
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
										<button type="button" class="btn btn-danger" onclick="confirmDel()"data-dismiss="modal">Delete</button>
									</div>
								</div>
							</div>

						</div>