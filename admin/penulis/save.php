<?php  
	date_default_timezone_get("Asia/Jakarta");
	include 'koneksi.php';

	$nama_penulis = $_POST['nama_penulis'];

	$sql = "INSERT INTO penulis (nama_penulis)
		VALUES (
			'$nama_penulis'
		)
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?penulis&addPenulisSuccess');
	} else {
		header('location:?penulis&addPenulisFail');
	}

?>