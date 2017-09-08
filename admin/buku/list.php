<div class="panel-heading">
	<div class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar Buku</div>
</div>
<div class="panel-body">	
	<a href="?addbuku" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Buku</a>
		<?php  
			if (isset($_GET['addBookSuccess'])) {
				echo "<div class='alert alert-success'>Success, Add Book</div>";
			} elseif (isset($_GET['addBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Add Book !!</div>";
			} elseif (isset($_GET['hapusBookSuccess'])) {
				echo "<div class='alert alert-success'>Success, Hapus Buku !!</div>";
			} elseif (isset($_GET['hapusBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Hapus Buku !!</div>";
			} elseif (isset($_GET['editBookSuccess'])) {
				echo "<div class='alert alert-success'>Success, Update Buku !!</div>";
			} elseif (isset($_GET['editBookFail'])) {
				echo "<div class='alert alert-danger'>Failed, Update Buku !!</div>";
			}
		?>
	<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Buku</th>
				<th>Detail Buku</th>
				<th>Tanggal Terbit</th>
				<th>Penulis</th>
				<th>Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'koneksi.php';
				$no = 1;
				$sql = "
						SELECT b.*, a.nama_penulis as nama_penulis, c.nama_kategori as nama_kategori FROM buku b
						JOIN penulis a ON b.id_penulis = a.id_penulis
						JOIN kategori c ON c.id_kategori = b.id_kategori
				";
				$query = mysql_query($sql);
				
				while ($data = mysql_fetch_assoc($query)) { 
			?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $data['nama_buku'] ?></td>
						<td><?= $data['detail_buku'] ?></td>
						<td><?= date('d F Y H:i:s', strtotime($data['tanggal_terbit'])) ?></td>
						<td><?= $data['nama_penulis'] ?></td>
						<td><?= $data['nama_kategori'] ?></td>
						<td>
							<a href='?editbuku&id=<?= $data['id_buku'] ?>' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i></a>
							<a href='?hapusbuku&id=<?= $data['id_buku'] ?>' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
						</td>
					</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>