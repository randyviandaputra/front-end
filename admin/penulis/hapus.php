<?php  
	include 'koneksi.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM 
		penulis 
		WHERE id_penulis = $id
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?penulis&hapusPenulisSuccess');
	} else {
		header('location:?penulis&hapusPenulisFail');
	}

?>