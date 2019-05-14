<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/timepicker.css">



<div class="col-md-9">
  <div class="box box-success">
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h3 class="box-title text-center">LogBook</h3>
    
    </div>

  </br>
    <div class="box-body">
      <form action="<?php echo site_url('Mahasiswa/tambah_logbook') ; ?>" method="post">
      <div id="home" class="tab-pane fade in active">
        <table class="table table-striped">
          <body>
            <tr>
              <td width="200px;">NIM </td>
              <td>:</td>
              <td colspan="2">
                <input readonly="true" name="nim" id="nim" value="<?php echo $this->session->userdata('nim'); ?>" class="form-control" >
              </td>
            </tr>

            <tr>
              <td width="200px;">Tanggal </td>
              <td>:</td>
              <td colspan="2">
                <div class="form-group">
                   <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tanggal" style="width:150px" >
                    </div>
                     <input type="hidden" id="dtp_input2" value=""/>
                </div>
              </td>
            </tr>

            <tr>    
              <td width="200px">Jam Mulai </td>
              <td>:</td>
              <td colspan="2">
                 <div class="bootstrap-timepicker">
                              <div class="form-group">

                                 <div class="input-group input-group-lg">
                                   <input type="text" name="jammulai" class="form-control timepicker">

                                   <div class="input-group-addon" class="form-control">
                                      <span class="glyphicon glyphicon-time"></span>
                                   </div>
                                 </div>
                              </div>
                          </div>
                </div>
 
              </td>
            </tr>

            <tr>
              <td width="200px">Jam Selesai </td>
              <td>:</td>
              <td colspan="2">
                <div class="bootstrap-timepicker">
                              <div class="form-group">

                                 <div class="input-group input-group-lg">
                                   <input type="text" name="jamselesai" class="form-control timepicker">

                                   <div class="input-group-addon" class="form-control">
                                      <span class="glyphicon glyphicon-time"></span>
                                   </div>
                                 </div>
                              </div>
                          </div>
                </div>
 
              </td>
            </tr>

            <tr>
              <td width="200px;">Tugas/Hasil/Hal yang dikerjakan </td>
              <td>:</td>
              <td colspan="2">
                <textarea name="kegiatan" id="tugas" placeholder=" Tugas/Hasil" class="form-control" ></textarea>
              </td>
            </tr>

          </body>
        </table>
      </div>
    </div>

    <button type="submit" class="btn btn-warning pull-right">
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
        <h3 class="box-title text-center">Data Tentang LogBook</h3>
        <div class="box-body">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered" style="text-align: center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Tugas/Hasil/Hal yang dikerjakan</th>
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
                  <td><?php echo $u->Tanggal ?></td>
                  <td><?php echo $u->JamMulai ?></td>
                  <td><?php echo $u->JamSelesai ?></td>
                  <td><?php echo $u->Kegiatan ?></td>
                  <td><?php echo anchor('Mahasiswa/hapus/'.$u->NIM,'Hapus'); ?></td>
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

<!-- jQuery Version 1.11.0 -->
 <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>

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

<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/timepicker.js"></script>

<script>
$(function(){
 $('.timepicker').timepicker({
       showInputs: false
    })
});
</script>
</html>