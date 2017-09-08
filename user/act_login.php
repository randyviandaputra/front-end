<?php 
	include 'koneksi.php';

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

	$query = mysql_query($sql);
	$get_data = mysql_fetch_assoc($query);
	$sum_data = mysql_num_rows($query);

	if ($sum_data ==1) {
		session_start();
		$_SESSION['nama'] = $get_data['name'];
		$_SESSION['email'] = $get_data['email'];
		$_SESSION['id_user'] = $get_data['id_user'];

		header('location:index.php');
	} else {
		header('location:login.php?gagal');
	}


?>