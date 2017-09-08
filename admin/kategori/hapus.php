<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM 
		kategori 
		WHERE id_kategori = $id
	";
	
	$query = mysql_query($sql);

	if ($query) {
		header('location:?kategori&hapusKategoriSuccess');
	} else {
		header('location:?kategori&hapusKategoriFail');
	}

?>