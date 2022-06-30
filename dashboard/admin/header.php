<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Siswa - Presensi</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>

	<body class="bg-light">
		
		<!-- navbar -->
		<div class="navbar">
			<div class="container">
				
				<!-- navbar brand -->
				<h2 class="nav-brand float-left"><img class="logo" src="https://i0.wp.com/lpmpsulbar.kemdikbud.go.id/wp-content/uploads/2020/09/LOGO-TUT-WURI-HANDAYANI-1.png"><a href="index.php">SMA 17 Agustus</a></h2>

				<!-- navbar menu -->
				<ul class="nav-menu float-left">
					<li><a href="index.php">Beranda</a></li>
					<li><a href="siswa.php">Profile</a></li>
					<li><a href="agenda.php">Agenda</a></li>
					<li><a href="absensi.php">Presensi</a></li>
					<li>
						<a href="">Logout <i class="fa fa-caret-down"></i></a>

						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="logout.php">Keluar</a></li>
						</ul>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>