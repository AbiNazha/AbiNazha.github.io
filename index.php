<?php

	include 'function.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>INFO COVID-19</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Info Covid-19</title>
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}

		body{
			font-family: 'Open Sans', sans-serif;
		}
		#head{
			background-image: url(img/faded.jpg);
			object-fit: scale-down;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
		<a class="navbar-brand pl-5" href="#" style="font-family: 'Dancing Script', cursive;">INFO COVID-19</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto pr-5 pl-5">
				<li class="nav-item">
					<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#tentang">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#gejala">Gejala</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#penanggulangan">Penanggulangan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="head" class="jumbotron jumbotron-fluid bg-light text-white container-md">
		<div class="container text-center">
			<h1 class="display-4">INFO COVID-19</h1>
			<p class="lead">Informasi Seputar Covid-19</p>
		</div>
	</div>

	<div class="container-md">
		<div class="row">
			<div class="col-sm-6 " style="margin: 10px 0 10px 0 ">
				<div class="card bg-danger img-card box-primary-shadow text-white">
					<div class="card-body">
						<div class="row justify-content-md-center">
							<div class="col text-center ">
								<p>Positif : <?= $dataIndo[0]['positif']?> jiwa</p>
								<p>Sembuh : <?= $dataIndo[0]['sembuh']?> jiwa</p>
								<p>Meninggal : <?= $dataIndo[0]['meninggal']?> jiwa</p>
							</div>
						</div>
					</div>
				</div>
				<a href="index.php?page=indonesia" class="btn btn-outline-danger btn-lg btn-block mt-2">Indonesia</a>
			</div>
			<div class="col-sm-6" style="margin: 10px 0 10px 0">
				<div class="card bg-success img-card box-primary-shadow text-white">
					<div class="card-body">
						<div class="row justify-content-md-center">
							<div class="col text-center">
								<p>Positif : <?= $dataPositifDunia['value']?> jiwa</p>
								<p>Sembuh : <?= $dataSembuhDunia['value']?> jiwa</p>
								<p>Meninggal : <?= $dataMeninggalDunia['value']?> jiwa</p>
							</div>
						</div>
					</div>
				</div>
				<a href="index.php?page=dunia" class="btn btn-outline-success btn-lg btn-block mt-2">Dunia</a>
			</div>
		</div>
	</div>
<div id="next" class="container mt-5 pt-5">
	<?php
		include $page;
	?>
</div>

<!-- ///////////////////////////Tentang\\\\\\\\\\\\\\\\\\\\\\\ -->

<div class="container sub_section pt-5 pb-5 mb-5" id="tentang">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Tentang Covid-19</h1>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-12">
			<img src="img/coronavirus.png" class="img-fluid" alt="">
		</div>
		<div class="col-lg-9 col-md-6 col-12">
			<h2>Apa itu COVID-19 (Coronavirus)</h2>
			<p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan.
				Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu.
				Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
			<p>Selain virus SARS-CoV-2 atau virus Corona, virus yang juga termasuk dalam kelompok ini adalah virus penyebab Severe Acute Respiratory Syndrome (SARS) dan virus penyebab Middle-East Respiratory Syndrome (MERS).
				Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa perbedaan dengan SARS dan MERS, antara lain dalam hal kecepatan penyebaran dan keparahan gejala.</p>
		</div>
	</div>
</div>

<!-- /////////////////////////////Gejala\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<div class="container sub_section pt-5 pb-5 bg-light" id="gejala">
	<div class="row justify-content-center pt-5 pb-5">
			<div class="col-lg-6 col-md-10">
					<div class="section-title text-center pb-10">
							<h3 class="title pb-3">KENALI GEJALANYA</h3>
							<p class="text">Jangan Panik, Kenali gejalanya dan deteksi virus corona sejak dini. Hanya perlu mengatur jarak, hindari bersalaman dan bila sakit memakai masker, dan jaga kebersihan</p>
					</div>
			</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Demam</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/fever.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Demam menunjukkan gejala awal corona, demam biasanya mencapai suhu 38 derajat celcius keatas</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Batuk Kering</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/cough.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Batuk Kering tidak beriak dan berulang ulang merupakan tanda infeksi aktif di paru-paru, yang mungkin bisa disebabkan karena COVID-19</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Sakit tenggorokan</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/sore-throat.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Infeksi COVID-19 akan melalui jalur pernafasan sehingga dapat mengakibatkan radang pada tenggorokan dan rasa nyeri</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Sakit Kepala</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/headache.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Dengan adanya demam yang tinggi, COVID-19 seringkali diikuti dengan gejala sakit kepala</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Lemas</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/sick.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Infeksi COVID-19 yang telah menyebar ke seluruh tubuh akan menghabiskan energi yang banyak sehingga seringkali dapat mengakibatkan lemas</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-7 col-sm-9 pl-5 pb-5">
			<div class="mt-40">
				<div class="d-flex justify-content-between">
						<h4 class="">Sesak Nafas</h4>
						<div class="features-icon">
								<i class="lni lni-brush" style="opacity: 0"></i>
								<img class="shape" src="img/sesak.png" alt="Shape" width="90" height="100">
						</div>
				</div>
				<div class="">
					<p class="text">Apabila COVID-19 berkembang dengan cepat dan besar di paru-paru, fungsi paru akan menurun sehingga terjadi sesak nafas</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- //////////////////////////////////////Penanggulangan\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<div class="container sub_section pt-5 pb-5 mb-5" id="penanggulangan">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Pencegahan Covid-19</h1>
	</div>
	<div class="row ml-5 pl-5">
		<div class="col-lg-10 col-md-6 col-12">
			<p>Bersihkan tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan alkohol.</p>
			<p>Selalu jaga jarak yang aman dengan orang yang batuk atau bersin.</p>
			<p>Jangan sentuh mata, hidung, atau mulut Anda.</p>
			<p>Saat Anda batuk atau bersin, tutup mulut dan hidung dengan lengan Anda atau tisu.</p>
			<p>Tetaplah di rumah jika Anda merasa tidak enak badan.</p>
			<p>Jika Anda demam, batuk, atau kesulitan bernapas segera cari bantuan medis. Hubungi terlebih dahulu.</p>
			<p>Ikuti arahan otoritas kesehatan lokal Anda.</p>
			<p>Menghindari kunjungan yang tidak diperlukan ke fasilitas medis memungkinkan sistem kesehatan beroperasi dengan lebih efektif. Tindakan ini akan melindungi Anda dan orang lain.</p>
		</div>
	</div>
</div>

<!-- ////////////////////////////////////Contact\\\\\\\\\\\\\\\\\\\\\ -->

<div class="container sub_section bg-light pt-5 pb-5 mb-5" id="contact">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Username</label>
				    <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required>
				  </div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="example@email.com" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input type="number" class="form-control" name="no" placeholder="081234567891" autocomplete="off" required>
					</div>

				  <div class="form-group">
				    <label>Gejala yang dirasakan</label>
				    <textarea class="form-control" name="gejala" rows="3" required></textarea>
				  </div>

					<button type="submit" name="button" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "corona";

$conn = mysqli_connect($server, $user, $password, $db);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$gejala = $_POST['gejala'];

	$insertquery = " INSERT INTO datacorona (username, email, no, gejala) VALUES('$username', '$email', '$no', '$gejala')";

	if($query){
	  ?>
	  <script>
	    alert("connection successful");
	  </script>
	  <?php
	}else {
	  ?>
	  <script>
	    alert("No connection");
	  </script>
	  <?php
	}
}

 ?>
