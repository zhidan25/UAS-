<?php
	include 'header.php'
?>

		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
					<div class="box-header">
						<h3>Selamat Datang <?= $_SESSION['uname'] ?> di Presensi Siswa</h3>
						<p>Status : <?= $_SESSION['ulevel'] ?></p>
					</div>

					<div class="box-body">
						<div class="slide">
							<div class="slide1"></div>
							<div class="slide2"></div>
							<div class="slide3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
					<div class="card" >
  						<div class="card-body">
    						<h5 class="card-title">Matematika</h5>
    						<p class="card-text">Yuni (199003)</p>
    						<a href="jadwal.php" class="btn btn-primary">Detail...</a>
  						</div>
					</div>
		</div>
		<div class="container">
					<div class="card">
  						<div class="card-body">
    						<h5 class="card-title">Kimia</h5>
    						<p class="card-text">Wahid (199001)</p>
    						<a href="jadwal.php" class="btn btn-primary">Detail...</a>
  						</div>
					</div>
		</div>
		<div class="container">
					<div class="card">
  						<div class="card-body">
    						<h5 class="card-title">Bhs.indonesia</h5>
    						<p class="card-text">Yoni (199002)</p>
    						<a href="jadwal.php" class="btn btn-primary">Detail...</a>
  						</div>
			</div>
		</div>
		<div class="container">
					<div class="card">
  						<div class="card-body">
    						<h5 class="card-title">B.Inggris</h5>
    						<p class="card-text">Heri (199004)</p>
    						<a href="jadwal.php" class="btn btn-primary">Detail...</a>
  						</div>
					</div>
		</div>

<?php
	include 'footer.php'
?>