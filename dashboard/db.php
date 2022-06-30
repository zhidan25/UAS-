<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'tutorialphp';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung');
	
?>