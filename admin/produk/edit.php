<?php 

$mysq = mysqli_query($koneksi, "SELECT * FROM product WHERE id_product='$_GET[id_product]'");
$data  = mysqli_fetch_array($mysq);

?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
            <div class="box">
            <div class="box-header text-center">
             <h2 style="font-size: 18px;font-weight: bold;">FORM EDIT PRODUK</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="">
              	 <input type="hidden" name="id_product" value="<?php echo $data['id_product'] ?>">
                <table class="table">
                  <tr>
                  <td>
                    <label>Nama</label>
                    <input type="text" name="nama_product" value="<?php echo $data['nama_product'] ?>" class="form-control" required="" placeholder="Nama produk ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>harga</label>
                    <input type="text" name="harga_product" value="<?php echo $data['harga_product'] ?>" class="form-control" required="" placeholder="harga produk ..." autocomplete="off">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>keterangan</label>
                    <textarea rows="3" name="ket_product" class="form-control" required="" placeholder="keterangan produk ..." autocomplete="off"><?php echo $data['ket_product'] ?></textarea>
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
   
   $id_product = $_POST['id_product'];
   $nama_product = $_POST['nama_product'];
    $harga_product = $_POST['harga_product'];
     $ket_product = $_POST['ket_product'];


     $mysql = mysqli_query($koneksi, "UPDATE product SET nama_product='$nama_product', harga_product='$harga_product', ket_product='$ket_product' WHERE id_product='$id_product'");
     if ($mysql) {
        echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id_product=$id_product'></script>";
     }else{
      echo "<script>alert('Terjadi kessalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=produk/edit&id_product=$id_product'></script>";
     }


  }



   ?>