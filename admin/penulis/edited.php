<?php 
	include 'koneksi.php';

	$id = $_POST['id_penulis'];
	$nama_penulis = $_POST['nama_penulis'];

	$sql = "UPDATE penulis SET
		nama_penulis = '$nama_penulis'
		WHERE id_penulis = '$id'
	";
	$query = mysql_query($sql);

	if ($query) {
		header('location:?penulis&editPenulisSuccess');
	} else {
		header('location:?penulis&editPenulisFail');
	}
?>