<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <div class="box-header">
      <i class="fa fa-info-circle" aria-hidden="true"></i>
      <h1 class="box-title text-center">LOGBOOK MAHASISWA</h1>
      <div class="row">
        <h4><p align="center">Daftar Logbook Mahasiswa</p></h4>
        <table class="table table-bordered" style="text-align: center">
          <thead>
            <tr>
              <th style="text-align: center">No</th>
              <th style="text-align: center">NIM</th>
              <th style="text-align: left">Nama</th>
              <th style="text-align: left">Divisi</th>
              <th style="text-align: center">Action</th>
            </tr >
      <?php
      $start = 0;
      foreach ($LogbookL as $post)
      {
        ?>
        <tr>
          <td width="80px"><?php echo ++$start ?></td>
          <td><?php echo $post->NIM ?></td>
          <td><?php echo $post->Nama ?></td>
          <td><?php echo $post->Divisi ?></td>
          <td>
           <a role="button" class="btn btn-info" href="logbook/<?php echo $post->NIM ?>">Lihat</a></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>