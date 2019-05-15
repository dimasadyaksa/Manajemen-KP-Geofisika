<script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<script src="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 

<div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">Daftar Seminar</h3>


    <div class="box-body">
      <h4 style="text-align: center;">Tambah Daftar Seminar</h4>
      <form action="<?php echo site_url('Mahasiswa/tambah_daftarseminar') ; ?>" method="post">
      <div id="home" class="tab-pane fade in active">
        <table class="table table-striped">
          <body>
            <tr>
              <td width="200px;">NIM </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="nim" id="nim" readonly="true" value="<?php echo $this->session->userdata('nim'); ?>" class="form-control" >
              </td>
            </tr>

            <tr>
              <td width="200px;">Ruang </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="ruang" id="ruang" placeholder="ruang" class="form-control" value>
              </td>
            </tr>

            <tr>    
              <td width="200px">Gedung </td>
              <td>:</td>
              <td colspan="2">
                <input type="text" name="gedung" id="gedung" placeholder="gedung" class="form-control" value>
              </td>
            </tr>

            <tr>
              
              <td width="200px">Waktu </td>
              <td>:</td>
              <td colspan="2">
                <form name="form1" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group" style="margin-left:10px;">
                       <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                       <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tanggal" style="width:150px" >
                    </div>
                      <input type="hidden" id="dtp_input2" value=""/>
                </div>
                </form>
                <input type="date" name="waktu" id="waktu" placeholder=" tahun-bulan-tanggal:jam:menit:detik" class="form-control" value>
              </td>
            </tr>

            

          </body>
        </table>
      </div>
    </div>

    <button type="submit" onclick="saveSeminar()" class="btn btn-warning pull-right">
      <i class="fa fa-save margin-r-5"></i>
      <h5 class="modal-title">Simpan</h5>     
    </button>
  </form>
    </br>
    </br>
    </br>

    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h3 class="box-title text-center">Jadwal Seminar</h3>
        <div class="box-body">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered" style="text-align: center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Ruang</th>
                  <th>Gedung</th>
                  <th>Waktu</th>
                
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->NIM ?></td>
                  <td><?php echo $u->Ruang ?></td>
                  <td><?php echo $u->Gedung ?></td>
                  <td><?php echo $u->waktu ?></td>
                
                  
                  <td><?php echo anchor('Mahasiswa/update/'.$u->NIM,'Update'); ?></td>
                  <td><?php echo anchor('Mahasiswa/hapusseminar/'.$u->NIM,'Hapus'); ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>
<script src="assets/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/timepicker.js"></script>
<script>
$(function(){
  $('.timepicker').timepicker({
        showInputs: false
    })
});
</script>