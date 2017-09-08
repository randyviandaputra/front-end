<?php 	
	include 'koneksi.php';

	$id_buku    = $_GET['id'];
	$id_user    = $_GET['id_user'];
	$tgl_pinjam = date('Y-m-d H:i:s');

	$sql = "INSERT INTO transaksi_peminjaman (id_buku,id_user,tanggal_pinjam) 
		VALUES(
			'$id_buku',
			'$id_user',
			'$tgl_pinjam'
		)
	";
	$query = mysql_query($sql);
	
	if ($query) {
		header('location:?list_pinjam&pinjamBookSuccess');
	} else {
		header('location:?list_pinjam&pinjamBookFail');
	}

	
?>
