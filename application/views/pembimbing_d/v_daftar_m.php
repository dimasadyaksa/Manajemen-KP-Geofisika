<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<div class="container content">
    <div class="row"><div class="col-md-3">

  <div class="list-group">
    <a href="http://siakad.itera.ac.id/mahasiswa" class="list-group-item"><i class="fa fa-home tab10" aria-hidden="true"></i>Dashboard</a>
    <a href="#" class="list-group-item "><i class="fa fa-plus-circle tab10" aria-hidden="true"></i>Profil</a>

  </div>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-header">Menu</a>
    <a href="#" class="list-group-item">
      <i class="fa fa-clock-o tab10" aria-hidden="true"></i> Penilaian</a>
    <a href="#" class="list-group-item ">
      <i class="fa fa-question-circle tab10" aria-hidden="true"></i> Pengajuan</a>
    <a href="<?php echo site_url('Pembimbing_Dosen/daftar_logbook')?>" class="list-group-item ">
      <i class="fa fa-calendar-check-o tab10" aria-hidden="true"></i> Logbook</a>
    <a href="<?php echo site_url('Pembimbing_Dosen/daftar_mahasiswa')?>" class="list-group-item active">
      <i class="fa fa-list-ul tab10" aria-hidden="true"></i> Daftar Mahasiwa</a>
    
  </div>

  
</div>        
        


<div class="col-md-9">


<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">Daftar Mahasiswa</h1>
        <div class="row">
        	<div class="col-md-6" >
			</div>

    	</div>
      <h4><p align="center">Daftar Mahasiswa</p></h4>
    <table class="table table-bordered" style="text-align: center">
    <thead>
      <tr>
        <th style="text-align: center">No</th>
        <th style="text-align: center">NIM</th>
        <th style="text-align: left">Nama</th>
        <th style="text-align: center">Angkatan</th>
        <th style="text-align: center">Aksi</th>

      </tr >
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>14116001</td>
        <td style="text-align: left">Retno Monika</td>
        <td>2016</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>

      <tr>
       <td>2</td>
        <td>14116002</td>
        <td style="text-align: left">Ali Musaldi</td>
        <td>2016</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>  
      
      <tr>
        <td>3</td>
        <td>14116003</td>
        <td style="text-align: left">Sandi Risky</td>
        <td>2016</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>

      <tr>
        <td>4</td>
        <td>14116004</td>
        <td style="text-align: left">Mimi Setiasih</td>
        <td>2016</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>

       <tr>
        <td>5</td>
        <td style="text-align: left"></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <p><h5><b>Nama Mahasiswa</b></h5></p>
        <font color="grey"><p><h5>Nama</h5></p></font><br>
        <p><h5><b>NIM</b></h5></p>
        <font color="grey"><p><h5>NIM</h5></p></font><br>
        <p><h5><b>Angkatan</b></h5></p>
        <font color="grey"><p><h5>2016</h5></p></font><br>
        <p><h5><b>Judul Proposal</b></h5></p>
        <font color="grey"><p><h5>Judul</h5></p></font><br>
        <p><h5><b>Tempat KP</b></h5></p>
        <font color="grey"><p><h5>Tempat</h5></p></font><br>
        <p><h5><b>Tanggal Mulai Praktik</b></h5></p>
        <font color="grey"><p><h5>Tanggal</h5></p></font><br>
        <p><h5><b>Tanggal Terakhir Praktik</b></h5></p>
        <font color="grey"><p><h5>Tanggal</h5></p></font><br>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

