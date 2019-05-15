<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">HALAMAN PENGAJUAN</h1>
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
        <th>Status</th>
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
        <td><?php echo $u->nim ?></td>
        <td style="text-align: left"><?php echo $u->nama ?></td>
        <td style="text-align: left"><?php 
        if ($u->PengajuanPembimbing==0) {
            echo "Belum ditentukan";
        }else if($u->PengajuanPembimbing==1){
            echo "Diterima";
        }else{
            echo "Ditolak";
        }?>
        <td>
            <button type="button" class="btn btn-success" onclick="aksiPengajuan(<?php echo $u->nim ?>,1)">Terima</button>

            <button type="button" class="btn btn-danger" onclick="aksiPengajuan(<?php echo $u->nim ?>,2)" >Tolak</button>          
            
            <?php echo anchor('pembimbing_dosen/update/'.$u->nim, 'Terima');  ?>
            <?php echo anchor('pembimbing_dosen/hapuspengajuan/'.$u->nim, 'Tolak');  ?>
        </td>
    </tr>
    <?php } ?>
</tbody>

</div>

