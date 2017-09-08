<?php  
	date_default_timezone_get("Asia/Jakarta");
	include 'koneksi.php';

	$id = $_POST['id_buku'];
	$nama_buku = $_POST['nama_buku'];
	$detail_buku = $_POST['detail_buku'];
	$id_penulis = $_POST['id_penulis'];
	$id_kategori = $_POST['id_kategori'];
	$tanggal_terbit = date('Y-m-d H:i:s');

	$sql = "UPDATE buku SET 
			nama_buku	= '$nama_buku', 
			detail_buku	= '$detail_buku', 
			tanggal_terbit	= '$tanggal_terbit', 
			id_penulis	= '$id_penulis' ,
			id_kategori	= '$id_kategori'
		WHERE id_buku = '$id'
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?books&editBookSuccess');
	} else {
		header('location:?books&editBookFail');
	}

?>