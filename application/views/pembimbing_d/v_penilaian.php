<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<div class="col-md-9">


<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">HALAMAN PENILAIAN</h1>
        <p><br></p>
        <div class="row">
        	<div class="col-md-6" >
			</div>

    	</div>
    <table class="table table-bordered" style="text-align:center">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>14116001</td>
        <td>Retno Monika</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>
      <tr>
       <td>2</td>
        <td>14116002</td>
        <td>Ali Musaldi</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>14116003</td>
        <td>Sandi Risky</td>
        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td></tr>
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
        <h4 class="modal-title">Detail Nilai</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8" >
            <p style="margin-left: 38px">
              <b>KRITERIA PENILAIAN</b>
              <br>
              KISARAN PENILAIAN   : 100&gt;=A&gt;=80,80&gt;=B&gt;=60,60&lt;C<br>
            </p>
        <p style="margin-left: 38px">

          1. Materi    : &emsp;&emsp;                    <br><br><br>
          2. Pemahaman Materi  :&emsp;&emsp;           <br><br><br>
          3. Bahasa dan Tata Penulisan :&emsp;&emsp; <br>
          </p> 
      </div>
      <form method="post" action="<?php echo site_url('simpan')?>">
          <div class="col-md-4">
          <p style="text-align: center";><b>NILAI</b> <br><br><br>
          <div class="form-group">
           <input type="text" class="form-control" name="Materi" id="usr">
          </div>
           <div class="form-group">
           <input type="text" class="form-control" name="Pemahaman" id="usr"><br>
          </div>
            <div class="form-group">
           <input type="text" class="form-control" name="Bahasa" id="usr"> <br>
          </div>
          </p>
        </div>
      </div>
       <p style="margin-left: 38px">Catatan :&emsp;&emsp; 
          <form method="post" name="Catatan" style="margin-left: 38px">
          <textarea name="Catatan" cols="60" rows="5" id="usr">

          </textarea>
          </form>
        </form>
          <div align="center" >
          <td>
          <a href="<?php echo site_url('pembimbing/penilaian')?>">
          <button type="button" class="btn btn-info btn-lg">Simpan</button></a>
        </td>
          <button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Close</button>
        </td>
        </div></p>

    </tbody>
  </table>
</div>
</div>
      </div>
    </div>

  </div>
</div>
