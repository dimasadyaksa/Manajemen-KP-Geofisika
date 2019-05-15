<div class="col-md-9">
	<div class="box box-success">
		<div class="box-header">
			<i class="fa fa-info-circle" aria-hidden="true"></i>
			<h3 class="box-title text-center">Pembimbing Dosen</h3>

		</div>
		<div class="box-body">
			<h4 style="text-align: center;">Daftar Pembimbing Dosen Teknik Geofisika</h4>
			<br>
			<table class="table table-hover">
				<thead>
					<th class="text-left">No</th>
					<th class="text-left">Nama Dosen</th>
					<th class="text-left">Spesialisasi</th>
					<th class="text-left">Kontak</th>
					<th class="text-left">Status</th>
				</thead>
				<?php
				 $start = 0;
				foreach( $dataDosen as $data){
					?>
					<tbody>
						<tr>
							<td><?php echo ++$start ?></td>
							<td><?php echo $data->Nama;?></td>
							<td><?php echo $data->Spesialisi;?></td>
							<td><?php echo $data->kontak;?></td>
							<td>
							 <a class="label label-success"><i class="fa fa-check"></i>Aktif</a>
							</td>
						</tr>
					</tbody>
					<?php
				}
				?>
			</table>
		</div>