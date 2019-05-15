        <div class="box-body">
            <h4 style="text-align: center;">Tambah Pembimbing Lapangan</h4>

            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama</label>
                        <div class="col-sm-8">
                            <input type="email" id="nama" class="form-control" placeholder="Nama Pembimbing">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Password</label>
                        <div class="col-sm-8">
                            <input type="Password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Email</label>
                        <div class="col-sm-8">
                            <input type="text" id="email" class="form-control" placeholder="Email pembimbing">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="posisi" placeholder="Jabatan pembimbing">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Kontak</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kontak" placeholder="Kontak pembimbing">
                        </div>
                    </div>

                </form>
                    <div class="text-right">
                        <button class="btn btn-danger" onclick="tambahPembimbing()" ><i class="fa fa-save"></i> Simpan</button>
                    </div>
            </div>
            <p style="padding-top: 30px"></p>
            <table class="table table-hovered">
                <thead>
                    <th class="text-left">No</th>
                    <th class="text-left">Nama</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Password</th>
                </thead>
                <tbody>
                    <?php 
                $no = 1;
                foreach($data as $d){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $d->Nama ?></td>
                  <td><?php echo $d->email ?></td>
                  <td><?php echo $d->password ?></td>
           
                  <td> </td>
                  
                </tr>
                <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>