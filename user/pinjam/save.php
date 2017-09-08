<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "UPDATE transaksi_peminjaman set 
		status = 1
		WHERE status = 0 AND id_user = '$id'
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?list_pinjam&savePeminjaman');
	} else {
		header('location:?list_pinjam&savePinjamBookFail');
	}


?>