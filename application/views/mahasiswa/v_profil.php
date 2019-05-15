		<div class="box-header">
			<i class="fa fa-info-circle" aria-hidden="true"></i>
			<h3 class="box-title text-center">Profil Data Diri</h3>
		</div>
		<div class="box-body">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Data Diri</a></li>
				<li><a data-toggle="tab" href="#PD">Pembimbing Dosen</a></li>
				<li><a data-toggle="tab" href="#KP">Tempat Kerja Praktik</a></li>
			</ul>
			<?php
			foreach( (array)$dataDiri as $data){
				?>
				<form id="form_edit_profil" method="post" action="<?php echo base_url().'Mahasiswa/editProfil'?>">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="home">
							<br>
							<div class="Photo">
								<img style="float: left; padding-right: : 10px; height: 100px; width: 90px;" class="img-thumbnail" src="<?php echo base_url()?>assets/img/ava.png" >
								<h4 style="padding-left: 100px;"><?php echo $data->Nama;?></h4>
								<h4 style="padding-left: 100px;"><?php echo $data->NIM;?></h4>
							</div>
							<div>
								<input type="file" name="photo" style="color: transparent; padding-left:10px;">
							</div>
							<br>
							<h3>Data Profil</h3>
							<table class="table table-hover">

								<tr>
									<td>Email </td>
									<td>:</td>
									<td><input class="form-control" type="text" name="email" value="<?php echo $data->email;?>" readonly> </td>
								</tr>
								<tr>
									<td>Nama Lengkap </td>
									<td>:</td>
									<td><input class="form-control" type="text" name="Nama" value="<?php echo $data->Nama;?>" placeholder="Isi nama lengkap anda"> </td>
								</tr>
								<tr>
									<td>No HP </td>
									<td>:</td>
									<td><input class="form-control" type="text" name="No_telp" value="<?php echo $data->No_telp;?>" placeholder="Isi nama lengkap anda"> </td>
								</tr>
								<tr>
									<td>NIM </td>
									<td>:</td>
									<td><input class="form-control" type="text" name="name" value="<?php echo $data->NIM;?>" placeholder="Isi nama lengkap anda" readonly> </td>
								</tr>
								<tr>
									<td>Angkatan</td>
									<td>:</td>
									<td><input class="form-control" type="text" name="name" value="<?php echo $data->Angkatan;?>" placeholder="Isi nama lengkap anda" readonly> </td>
								</tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td>
										<input id="pass" class="input" type="Password" name="Password" value="<?php echo $data->password;?>" placeholder="Isi jika hanya ingin mengganti Password" >
										<span id="btpass" onclick="change()"><i class="fa fa-eye-slash"></i></span>
									</td>
								</tr>
								<tr>
									<td>Judul Proposal</td>
									<td>:</td>
									<td><input readonly class="form-control" type="text" name="email" value="<?php echo $data->JudulProposal;?>">
									</td>
								</tr>
							</table>
							
						<div class="text-right">
							<button type="submit" class="btn btn-warning"><i class="fa fa-save" ></i> Simpan</button>
						</div>
					</div>



					<div class="tab-pane" id="PD">
						<br>
						<table class="table table-hover">
							<tr>
								<td>Pembimbing Dosen</td>
								<td>:</td>
								<td>
									<select class="form-control">
										<option>-Pilih-</option>
										<!-- <?php
										foreach($dataDosen as $data){
											echo "<option value='".$data->NIP."'>".$data->Nama."</option>";
										}
										?> -->
									</select>
								</td>
							</tr>
							<tr>
								<td>NIP</td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email"> </td>
							</tr>
							<tr>
								<td>Spesialisasi</td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email"> </td>
							</tr>	
							<tr>
								<td>Kontak</td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email"> </td>
							</tr>
						</table>
					</div>



					<div class="tab-pane" id="KP">
						<br>
						<table class="table table-hover">
							<tr>
								<td>Tempat Kerja Praktik </td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email" > </td>
							</tr>
							<tr>
								<td>Divisi</td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email" value="<?php echo $data->Divisi;?>" readonly> </td>
							</tr>
							<tr>
								<td>Mulai Kerja Praktik</td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email" value="<?php echo $data->MulaiMagang;?>" readonly> </td>
							</tr>
							<tr>
								<td>Selesai Kerja Praktik </td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email" value="<?php echo $data->SelesaiMagang;?>" readonly> </td>
							</tr>
							<tr>
								<td>Pembimbing Lapangan </td>
								<td>:</td>
								<td><input class="form-control" type="text" name="email" value="munand" readonly> </td>
							</tr>
						</table>
						<?php
						}
						?>
					</div>
				</div>
			</form>
		</div>

<script type="text/javascript">
	function change()
	{
		var x = document.getElementById('pass').type;

		if (x == 'password')
		{
			document.getElementById('pass').type = 'text';
			document.getElementById('btpass').innerHTML = '<i class="fa fa-eye"></i>';
		}
		else
		{
			document.getElementById('pass').type = 'password';
			document.getElementById('btpass').innerHTML = '<i class="fa fa-eye-slash"></i>';
		}
	}

	$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });

    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#KP'.tab('show'));
    }
});

</script>
