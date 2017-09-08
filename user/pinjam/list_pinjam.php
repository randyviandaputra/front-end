<div class="panel-heading">
	<div class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar Peminjaman</div>
</div>
<div class="panel-body">	
	<a href="?pinjambuku" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Pinjam Buku</a>
		<?php  
			if (isset($_GET['pinjamBookSuccess'])) {
				echo "<div class='alert alert-success'>Success, Pinjam Book</div>";
			} elseif (isset($_GET['pinjamBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Pinjam Book !!</div>";
			} elseif (isset($_GET['hapusBookSuccess'])) {
				echo "<div class='alert alert-success'>Success, Hapus Buku !!</div>";
			} elseif (isset($_GET['hapusBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Hapus Buku !!</div>";
			} elseif (isset($_GET['savePeminjaman'])) {
				echo "<div class='alert alert-success'>Success, Simpan Peminjaman Buku !!</div>";
			} elseif (isset($_GET['savePinjamBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Simpan Peminjaman Buku !!</div>";
			}
		?>
	<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Buku</th>
				<th>Detail Buku</th>
				<th>Tanggal Pinjam</th>
				<th>User Peminjam</th>
				<th>Status Peminjaman</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'koneksi.php';
				$no = 1;
				$sql = "
						SELECT t.*, b.nama_buku as nama_buku, b.detail_buku as detail, u.name as nama FROM 
						transaksi_peminjaman t 
						JOIN buku b ON t.id_buku = b.id_buku
						JOIN users u ON t.id_user = u.id_user
						where status_peminjaman != 1
				";
				$query = mysql_query($sql);
				$id_user = $_SESSION['id_user'];
				$status_simpan = false;
				while ($data = mysql_fetch_assoc($query)) { 
					$status_simpan = ($data['status'] == 1) ? true : false;
					$status = $data['status_peminjaman'] == 0 ? 'Belum Di Kembalikan' : 'Sudah Di Kembalikan';
			?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $data['nama_buku'] ?></td>
						<td><?= $data['detail'] ?></td>
						<td><?= date('d F Y H:i:s', strtotime($data['tanggal_pinjam'])) ?></td>
						<td><?= $data['nama'] ?></td>
						<td><?= $status ?></td>
						<td>
							<?php if ($data['status'] != 1): ?>
								<a href='?hapuspinjam&id=<?= $data['id_transaksi'] ?>' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
							<?php endif ?>
						</td>
					</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
	<?php if ($status_simpan == false): ?>
		<a href="?savePinjam&id=<?= $id_user ?>" class="btn btn-primary">Simpan</a>
	<?php endif ?>
</div>