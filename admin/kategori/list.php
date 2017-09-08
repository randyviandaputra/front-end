<div class="panel-heading">
	<div class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar kategori</div>
</div>
<div class="panel-body">	
	<a href="?addkategori" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Kategori</a>
		<?php  
			if (isset($_GET['addKategoriSuccess'])) {
				echo "<div class='alert alert-success'>Success, Add Kategori</div>";
			} elseif (isset($_GET['addKategoriFail'])) {
				echo "<div class='alert alert-danger'>Failed, Add Kategori !!</div>";
			} elseif (isset($_GET['editKategoriSuccess'])) {
				echo "<div class='alert alert-success'>Success, Edit Kategori !!</div>";
			} elseif (isset($_GET['editKategoriFail'])) {
				echo "<div class='alert alert-danger'>Failed, Edit Kategori !!</div>";
			}elseif (isset($_GET['hapusKategoriSuccess'])) {
				echo "<div class='alert alert-success'>Success, Hapus Kategori !!</div>";
			} elseif (isset($_GET['hapusKategoriFail'])) {
				echo "<div class='alert alert-danger'>Failed, Hapus Kategori !!</div>";
			}
		?>	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'koneksi.php';
				$no = 1;
				$sql = "
						SELECT * FROM kategori
				";
				$query = mysql_query($sql);

				while ($data = mysql_fetch_assoc($query)) {
					echo "
						<tr>
							<td>".$no."</td>
							<td>".$data['nama_kategori']."</td>
							<td>
								<a href='?editkategori&id=".$data['id_kategori']."' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i></a>
								<a href='?hapuskategori&id=".$data['id_kategori']."' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
							</td>
						</tr>
					";
					$no++;
				}
			?>
		</tbody>
	</table>
</div>