<?php 

$mysq = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_GET[id_user]'");
$data  = mysqli_fetch_array($mysq);

?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
            <div class="box">
            <div class="box-header text-center">
             <h2 style="font-size: 18px;font-weight: bold;">FORM EDIT USER</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="">
              	 <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
                <table class="table">
                  <tr>
                  <td>
                    <label>Nama</label>
                    <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" class="form-control" required="" placeholder="Nama produk ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Username</label>
                    <input type="text" name="username_user" value="<?php echo $data['username_user'] ?>" class="form-control" required="" placeholder="harga produk ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Password</label>
                    <input type="text" name="password_user" value="<?php echo $data['password_user'] ?>" class="form-control" required="" placeholder="harga produk ..." autocomplete="off">
                  </td>
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
   
   $id_user = $_POST['id_user'];
   $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
     $password_user = $_POST['password_user'];


     $mysql = mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', username_user='$username_user', password_user='$password_user' WHERE id_user='$id_user'");
     if ($mysql) {
        echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'></script>";
     }else{
      echo "<script>alert('Terjadi kessalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/edit&id_user=$id_user'></script>";
     }


  }



   ?>