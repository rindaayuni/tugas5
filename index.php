<?php 

include 'admin/koneksi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>E-commerccee</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body id="home">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">E-commerccee</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#home"> HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#product">PRODUCT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#registrasi" data-toggle="modal">REGISTRASI</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/1.1.jpg" class="d-block w-100" alt="assets/img/1.jpg" style="height: 650px">
			</div>
			<div class="carousel-item">
				<img src="assets/img/1.2.jpg" class="d-block w-100" alt="assets/img/1.jpg" style="height: 650px">
			</div>
			<div class="carousel-item">
				<img src="assets/img/1.3.jpg" class="d-block w-100" alt="assets/img/1.jpg" style="height: 650px">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<section class="feature">
		<h3 class="feture-title">KATEGORI</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">assignment_turned_in</i>
						<span class="card-feature-title">Penjualan Terbanyak</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">local_shipping</i>
						<span class="card-feature-title">Pengiriman Cepat</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">looks_one</i>
						<span class="card-feature-title">Kualitas Terbaik</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="feature" id="product">
		<h3 class="feture-title">PRODUCT</h3>
		<div class="container">
			<div class="row">
				<?php 

				$mysq = mysqli_query($koneksi, "SELECT * FROM product");
				while ($data  = mysqli_fetch_array($mysq)) {
					
					?>

					<div class="col-md-4">
						<div class="card">
							<img src="assets/img/1.1.jpg" class="card-img-top" alt="..." style="height: 250px">
							<div class="card-body">
								<h5 class="card-title"><?php echo $data['nama_product'] ?></h5>
								<h6 class="card-title"><?php echo 'Rp.'. number_format($data['harga_product']) ?></h6>
								<p class="card-text"><?php echo $data['ket_product'] ?></p>
								<a href="#confirm" class="btn btn-success mt-3" data-toggle="modal">Add to card</a>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			
			<div class="modal-content">
				<div class="modal-header bg-red">
					Maaf anda belum login, Silahkna login terlebih dahulu ...
				</div>
			</div>
			
		</div>
	</div>






	<!-- Modal -->
	<div class="modal fade" id="registrasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">REGISTRASI FORM</h5>
				</div>
				<div class="modal-body">
					<table class="table">
						<form class="" method="POST" action="">
							<tr>
								<td>
									<label>Nama</label>
									<input type="text" name="nama_user" class="form-control" required="" placeholder=" Nama lengkap ..." autocomplete="off">
								</td>
							</tr>
							<tr>
								<td>
									<label>Username</label>
									<input type="text" name="username_user" class="form-control" required="" placeholder=" Username ..." autocomplete="off">
								</td>
							</tr>
							<tr>
								<td>
									<label>Password</label>
									<input type="text" name="password_user" class="form-control" required="" placeholder="Password ..." autocomplete="off">
								</td>
							</tr>
							<tr>
								<td align="right">
									<button type="submit" name="regis" class="btn btn-primary">REGISTRASI</button>
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>
			
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

  <?php 

  if (isset($_POST['regis'])) {
   
   $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
     $password_user = $_POST['password_user'];


     $mysql = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama_user', '$username_user', '$password_user')");

     if ($mysql) {
       echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
     }else{
      echo "<script>alert('Terjadi kesalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
     }


  }



   ?>