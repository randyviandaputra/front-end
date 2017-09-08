<?php  
	date_default_timezone_get("Asia/Jakarta");
	include 'koneksi.php';

	$nama_kategori = $_POST['nama_kategori'];

	$sql = "INSERT INTO kategori (nama_kategori)
		VALUES (
			'$nama_kategori'
		)
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?kategori&addKategoriSuccess');
	} else {
		header('location:?kategori&addKategoriFail');
	}

?>