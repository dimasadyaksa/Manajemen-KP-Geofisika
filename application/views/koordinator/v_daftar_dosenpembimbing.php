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
  <div class="col-md-3"></div>
  <div class="col-md-9">
    <div class="container content">
  <h2 style="margin-top:15px; text-align: center;">Daftar Pembimbing Dosen</h2><br><br>
        <table class="table table-bordered table-striped" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
    <th>IdUser</th>
    <th>Nama</th>
    <th>Spesialis</th>
    <th>Kontak</th>
            </tr><?php
            foreach ($pembimbingdosen_data as $pembimbingdosen)
            {
                ?>
                <tr>
      <td><?php echo ++$start ?></td>
      <td><?php echo $pembimbingdosen->idUser ?></td>
      <td><?php echo $pembimbingdosen->Nama ?></td>
      <td><?php echo $pembimbingdosen->Spesialis ?></td>
      <td><?php echo $pembimbingdosen->kontak ?></td>
      
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

