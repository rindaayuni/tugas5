<?php 



     $mysql = mysqli_query($koneksi, "DELETE FROM product WHERE id_product='$_GET[id_product]'");
     if ($mysql) {
        echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'></script>";
     }else{
      echo "<script>alert('Terjadi kessalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=produk/index'></script>";
     }



 ?>