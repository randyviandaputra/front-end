<?php  
	include 'koneksi.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	if (!empty($name) && !empty($_POST['password'])) {
		$sql = "INSERT INTO users (name, email, password) 
				VALUES (
					'$name',
					'$email',
					'$password'
				)";
		$query = mysql_query($sql);
		if ($query) {
			header('location:signup.php?success');
		} else {
			header('location:signup.php?gagal');
		}
	} else {
		header('location:signup.php?validate');
	}
?>