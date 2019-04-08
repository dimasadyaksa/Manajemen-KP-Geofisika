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
  <div class="box-header">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      <h1 class="box-title text-center"><?php echo $judul;?></h1>
      </div>
  <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-left">No</th>
              <th class="text-left"><?php echo $a;?></th>
              <th class="text-left"><?php echo $b;?></th>
              <th class="text-left"><?php echo $c;?></th>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<th class="text-left">Action</th>';
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left">1</td>
              <td class="text-left">Nandar</td>
              <td class="text-left">14115021</td>
              <td class="text-left">A</td>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Detail</button>
              </td>';
              }
              ?>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-danger" data-toggle="modal"
                  data-target="#delete_user_popup">Delete</button>
              </td>';
              }
              ?>
              
            </tr>
            <tr>
              <td class="text-left">2</td>
              <td class="text-left">Dimas</td>
              <td class="text-left">14116047</td>
              <td class="text-left">B</td>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Detail</button>
              </td>';
              }
              ?>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-danger" data-toggle="modal"
                  data-target="#delete_user_popup">Delete</button>
              </td>';
              }
              ?>
            </tr>
            <tr>
              <td class="text-left">3</td>
              <td class="text-left">Rade</td>
              <td class="text-left">141162086</td>
              <td class="text-left">C</td>
              
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_user_popup">Detail</button>
              </td>';
              }
              ?>
              <?php if($role=="DosenPembimbingLapangan"){
                echo '<td class="text-left">
                <button type="button" class="btn btn-danger" data-toggle="modal"
                  data-target="#delete_user_popup">Delete</button>
              </td>';
              }
              ?>
            </tr>
          </tbody>
        </table>
        <div class="modal fade" id="update_user_popup" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail <?php echo $role;?></h4>
              </div>
              <div class="modal-body">
                <!-- Data di dalam form nantinya akan otomatis terisi
                  dengan data yang ada di database -->
                  <form action="/action_page.php">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                    </div>
                    <div class="form-group">
                      <label for="Username">NIP</label>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Perusahaan</label>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Pemilik</label>
                    </div>
                    <p style="padding-bottom: 10px"></p>
                    <div align="center">
                      <button type="button" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>

                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>

          <div class="modal fade" id="delete_user_popup" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Delete User</h4>
                </div>
                <div class="modal-body">
                <!-- Data di dalam form nantinya akan otomatis terisi
                  dengan data yang ada di database -->
                  <a>Apakah anda yakin akan menghapus?</a>
                  <p style="padding-bottom: 10px"></p>
                  <div align="center">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              </div>

            </div>