    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h1 class="box-title text-center">PENILAIAN KERJA PRAKTIK</h1>
      <div class="row">
       
        <br>
        <table class="table table-bordered" style="text-align: center">
          <thead>
            <tr>
              <th style="text-align: center">No</th>
              <th style="text-align: center">NIM</th>
              <th style="text-align: left">Nama</th>
              <th style="text-align: center">Angkatan</th>
              <th style="text-align: center">Action</th>

            </tr >
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>14116001</td>
              <td style="text-align: left">Iqbal Sanjaya</td>
              <td>2016</td>
              <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Nilai</button></td>
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
            <h4 class="modal-title">Detail Nilai</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8" >
                <p style="margin-left: 50px"><b>KRITERIA PENILAIAN</b></p>

                <br><br>
                <p style="margin-left: 50px">
                  1. Pemahaman terhadap Organisasi tempat Kerja Praktik &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;      <br><br><br>
                  2. Kemampuan menerima penugasan dan penyelsaian nya&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;         <br><br>
                  3. Kemampuan berkomunikasi dan mempresentasikan penyelsaian tugas &emsp;                                    <br> <br>
                  4. Kemampuan menuliskan laporan akademik&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;                                                                                                 <br><br><br>
                  5. Kemampuan beradaptasi dengan lingkungan pekerjaan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;       <br><br><br>
                </p> </div>

                <div class="col-md-4">
                  <p style="text-align: center;"><b>NILAI</b> <br><br><br>
                    <div class="form-group">
                     <input type="text" class="form-control" id="usr"><br>
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="usr"> <br>
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="usr"> <br>
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="usr"> <br>
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" id="usr"> <br>
                   </div>
                   <td>
                    <a href="<?php echo site_url('Pembimbing_Lapangan/Penilaian')?>">
                      <button type="button" class="btn btn-info">Nilai</button></a>
                    </td>
                    <a href="<?php echo site_url('Pembimbing_Lapangan/Penilaian')?>">
                      <button type="button" class="btn btn-info">Batal</button></a>
                    </td>


                  </p>
                </div>
              </div>





            </tbody>
          </table>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>