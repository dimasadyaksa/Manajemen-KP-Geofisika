<div class="col-md-9">
  <div class="box box-success">
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h1 class="box-title text-center">LOGBOOK</h1>  
      <br><br>

      <?php
      foreach ($detailLogbook as $post)
        ?>
      <div class="row">
        <div class="col-sm-4">
          <dl class="row">
            <dt class="col-sm-2">Nama:</dt>
            <dd class="col-sm-3"><?php echo $post->Nama ?></dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-2">NIM:</dt>
            <dd class="col-sm-3"><?php echo $post->NIM ?></dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-2"></dt>
            <dd class="col-sm-3"></dd>
          </dl>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <!-- <img class="img-fluid" src="<?php echo base_url()?>assets/Me.png" alt="help" width="86" height="110"> -->
        </div>
      </div>
      <?php
      ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Tugas/Hasil/Hal yang dikerjakan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $start = 0;
          foreach ($detailLogbook as $detail)
          {
            ?>
            <tr>
              <td width="80px"><?php echo ++$start ?></td>
              <td><?php echo $detail->Tanggal ?></td>
              <td><?php echo $detail->JamMulai ?></td>
              <td><?php echo $detail->JamSelesai?></td>
              <td><?php echo $detail->Kegiatan?></td>
              <td>
               <span class="label label-success "><i class="fa fa-check"></i> Terima</span>
             </tr>
             <?php
           }
           ?>
         </tbody>
       </table>
     </div>
   </div>