<?php
	include "koneksi.php";

	$id = $_POST['id_kategori'];
	$nama_kategori = $_POST['nama_kategori'];

	$sql = "UPDATE kategori SET
		nama_kategori = '$nama_kategori'
		WHERE id_kategori = '$id'
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?kategori&editKategoriSuccess');
	} else {
		header('location:?kategori&editKategoriFail');
	}
	
?>