    <section class="content-header">
      <h1>DATA USER</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="?page=user/tambah" class="btn btn-success btn-sm">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th><center>No.</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Username</center></th>
                    <th><center>Password</center></th>
                    <th><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  $no = 1;
                  $mysq = mysqli_query($koneksi, "SELECT * FROM user");
                  while ($data  = mysqli_fetch_array($mysq)) {

                   ?>
                   <tr>
                    <td><center><?php echo $no++ ?></center></td>
                    <td><center><?php echo $data['nama_user'] ?></center></td>
                    <td><center><?php echo $data['username_user'] ?></center></td>
                    <td><center><?php echo $data['password_user'] ?></center></td>
                    <td>
                      <center>
                        <a href="?page=user/edit&id_user=<?php echo $data['id_user'] ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="?page=user/hapus&id_user=<?php echo $data['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?!');">Delete</a>
                      </center>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>