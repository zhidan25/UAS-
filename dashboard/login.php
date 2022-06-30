<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bg-login">

	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
		
		<?php
			if (isset($_POST['submit'])){
				 include 'db.php';
				 $user = mysqli_real_escape_string($conn, $_POST['user']);
				 $pass = mysqli_real_escape_string($conn, $_POST['pass']);

				 $cek = mysqli_query($conn, "SELECT * FROM user where username = '".$user."' and password = '".$pass."'");
				 if(mysqli_num_rows($cek) > 0){

				 	$d = mysqli_fetch_object($cek);
				 	if($pass == $d->password){

				 		$_SESSION['info_login']     = true;
				 		$_SESSION['uid']			= $d->id;
				 		$_SESSION['uname']			= $d->nama_lengkap;
				 		$_SESSION['ulevel']			= $d->level;

				 		header('location: admin/index.php');

				 		
				 	}else{
				 		echo '<div class="alert alert-error">password yang dimasukkan salah</div>';
				 	 }
				 }else{
				 	echo '<div class="alert alert-error">username tidak ditemukan</div>';
				  }
			}
		?>
	</div>

</body>
</html>