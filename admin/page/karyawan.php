<?php if(empty($_GET['thisaction'])){header('location:../main.php');} ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#karyawanlist" data-toggle="tab">karyawan</a></li>
          <li class=""><a href="#newkaryawan" data-toggle="tab">Add karyawan</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-content">
            <div class="tab-pane active" id="karyawanlist">
              <br>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sqli=mysqli_query($con,"SELECT * FROM karyawan order by user asc");$vr=1;while($val=mysqli_fetch_array($sqli)){ ?>
                      <tr>
                        <td><?php echo $vr; ?></td>
                        <td><?php echo $val['nama']; ?></td>
                        <td><?php echo $val['alamat']; ?></td>
                        <td><?php echo $val['user']; ?></td>
                        <td><?php echo $val['pass']; ?></td>
                        <td align="center"><a href="prosadmin/hanadmin.php?thisposition=<?php echo base64_encode('deletekaryawan'); ?>&thiscontrol=<?php echo base64_encode($val['id_krw']); ?>" class="btn btn-circle btn-danger btn-sm tip-top" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Menghapus Data Ini')"><i class="glyphicon glyphicon-remove"></i></a></td>
                      </tr>
                      <?php $vr++; } ?>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="tab-pane" id="newkaryawan">
                  <div class="col-md-4">
                    <div class="modal-body">
                      <form role="form" method="post" action="prosadmin/hanadmin.php?thisposition=<?php echo base64_encode('addkaryawan'); ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button> 
                      </form>
                    </div>

                  </div>
                  <!-- /.box-header -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


<!--<div id="ModalAdd" class="modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Akun Admin</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
            </div>  
                     <br />
            <div class="form-group">
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
            </div>
        <div class="modal-footer">
            <button type="submit" name="register" class="btn btn-info" ><i class="glyphicon glyphicon-ok"></i>Simpan</button>
          </form>
        </div>
        </div>
    </div>
</div>-->