    <div class="box-body">
    	<h4 style="text-align: center;">Daftar Nama Perusahaan Tempat Kerja Praktik</h4>
    	<br>
        <table class="table table-hover">
        	<thead>
        		<th class="text-left">No</th>
        		<th class="text-left">Nama perusahaan</th>
        		<th class="text-left">Bidang</th>
        		<th class="text-left">Alamat perusahaan</th>
        		<th class="text-left">Aksi</th>
        	</thead>
        	<tbody>
        		<tr>
        			<td>1</td>
        			<td>PT. Bukit Asam</td>
        			<td>Pertambangan Batu Bara</td>
        			<td>Lampung</td>
        			<td>
        				<button data-toggle="modal" data-target="#detail_perusahaan" class="btn btn-info">Detail</button>
        			</td>
        		</tr>
        		<tr>
        			<td>2</td>
        			<td>PT. Agraria Utama</td>
        			<td>Pertanian</td>
        			<td>Lampung</td>
        			<td>
        				<button data-toggle="modal" data-target="#detail_perusahaan" class="btn btn-info">Detail</button>
        			</td>
        		</tr>
        	</tbody>
        </table>
        <div class="modal fade" id="detail_perusahaan" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Detail Perusahaan</h4>
							</div>
							<div class="modal-body">
								<!-- Data di dalam form nantinya akan otomatis terisi
									dengan data yang ada di database -->
									<form action="/action_page.php">
										<div class="form-group">
											<label for="nama">Nama Perusahaan</label>
											<br>
											<label><font class="text-muted" color="blue">Nama</font></label>
										</div>
										<div class="form-group">
											<label for="bidang">Bidang</label>
											<br>
											<label><font class="text-muted">Pertambangan</font></label>
										</div>
										<div>
											<label>Kontak Perusahaan</label>
											<br>
											<label><font class="text-muted">0878</font></label>
										</div>
										<div>
											<label>Alamat Perusahaan</label>
											<br>
											<label><font class="text-muted">Lampung</font></label>
										</div>
										<p style="padding-bottom: 10px"></p>
										<div align="center">
											<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>

    </div>
</div>
</div>