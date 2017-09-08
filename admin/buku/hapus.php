<?php  
	include 'koneksi.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM
		buku
		WHERE id_buku = $id;
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?books&hapusBookSuccess');
	} else {
		header('location:?books&hapusBookFail');
	}
?>