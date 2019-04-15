  <style type="text/css">
  td{
    text-align: center;
  }
  tr:hover{
    background-color: #f2dca5;
  }
  #no{
    background-color: #fff;
    width:1px;
  }
</style>
<div class="col-md-9"></div>
<div class="col-md-15">
  <div class="container content">
    <h2 style="margin-top:15px; text-align: center;">Daftar Pembimbing Lapangan</h2><br><br>
    <table class="table table-bordered table-striped" style="margin-bottom: 10px">
      <tr>
        <th>No</th>
        <th class="hidden">idDosenL</th>
        <th class="hidden">idPerusahaan</th>
        <th>Nama</th>
        <th>Kontak</th>
        <th>email</th>
        <th>Posisi</th>
        </tr><?php
        foreach ($pembimbinglapangan_data as $pembimbinglapangan)
        {
          ?>
          <tr>
            <td><?php echo ++$start ?></td>
            <td class="hidden"><?php echo $pembimbinglapangan->idDosenL ?></td>
            <td class="hidden"><?php echo $pembimbinglapangan->idPerusahaan ?></td>
            <td><?php echo $pembimbinglapangan->Nama ?></td>
            <td><?php echo $pembimbinglapangan->Kontak ?></td>
            <td><?php echo $pembimbinglapangan->email ?></td>
            <td><?php echo $pembimbinglapangan->Posisi ?></td>

          </tr>
          <?php
        }
        ?>
      </table>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6 text-right">
      <?php echo $pagination ?>
    </div>
  </div>  

