<?php  
	date_default_timezone_get("Asia/Jakarta");
	include 'koneksi.php';

	$nama_buku = $_POST['nama_buku'];
	$detail_buku = $_POST['detail_buku'];
	$id_penulis = $_POST['id_penulis'];
	$id_kategori = $_POST['id_kategori'];
	$tanggal_terbit = date('Y-m-d H:i:s');

	$sql = "INSERT INTO buku (nama_buku, detail_buku, tanggal_terbit, id_penulis, id_kategori)
		VALUES (
			'$nama_buku',
			'$detail_buku',
			'$tanggal_terbit',
			'$id_penulis',
			'$id_kategori'
		)
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?books&addBookSuccess');
	} else {
		header('location:?books&addBookFail');
	}

?>