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
  <div class="container content">
    <h2 style="margin-top:15px; text-align: center;">Daftar Pembimbing Dosen</h2><br><br>
    <table class="table table-bordered table-striped" style="margin-bottom: 10px">
      <tr>

        </tr>
        <thead>
            <tr>
              <th>No</th>
              <th class="hidden">IdUser</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Spesialis</th>
              <th>Kontak</th>

            </tr>
          </thead>
          <tbody id="dftr">
            
          </tbody>
        <?php
      /*foreach ($pembimbingdosen_data as $pembimbingdosen)
        {
          ?>
          <tr>
            <td><?php echo ++$start ?></td>
            <td class="hidden"><?php echo $pembimbingdosen->idUser ?></td>
            <td><?php echo $pembimbingdosen->Nama ?></td>
            <td><?php echo $pembimbingdosen->Spesialisasi ?></td>
            <td><?php echo $pembimbingdosen->kontak ?></td>

          </tr>
          <?php
        }*/
        ?>
      </table>

    </div>
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6 text-right">
      <?php echo $pagination ?>
    </div>
  </div>  

