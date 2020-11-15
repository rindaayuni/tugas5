
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
            <div class="box">
            <div class="box-header text-center">
             <h2 style="font-size: 18px;font-weight: bold;">FORM TAMBAH USER</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="">
                <table class="table">
                  <tr>
                  <td>
                    <label>Nama</label>
                    <input type="text" name="nama_user" class="form-control" required="" placeholder=" ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Username</label>
                    <input type="text" name="username_user" class="form-control" required="" placeholder=" ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Password</label>
                    <input type="text" name="password_user" class="form-control" required="" placeholder=" ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td align="right">
                    <button type="submit" name="simpan" class="btn btn-primary btn-sm">SIMPAN</button>
                  </td>
                </tr>
                </table>
                 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  <?php 

  if (isset($_POST['simpan'])) {
   
   $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
     $password_user = $_POST['password_user'];


     $mysql = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama_user', '$username_user', '$password_user')");

     if ($mysql) {
       echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
     }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'></script>";
     }


  }



   ?>