<div class="panel-heading">
	<div class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar Penulis</div>
</div>
<div class="panel-body">	
	<a href="?addpenulis" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Penulis</a>
		<?php  
			if (isset($_GET['addPenulisSuccess'])) {
				echo "<div class='alert alert-success'>Success, Add Penulis</div>";
			} elseif (isset($_GET['addPenulisFail'])) {
				echo "<div class='alert alert-danger'>Failed, Add Penulis !!</div>";
			} elseif (isset($_GET['editPenulisSuccess'])) {
				echo "<div class='alert alert-success'>Success, Edit Penulis !!</div>";
			} elseif (isset($_GET['editPenulisFail'])) {
				echo "<div class='alert alert-danger'>Failed, Edit Penulis !!</div>";
			} elseif (isset($_GET['hapusPenulisSuccess'])) {
				echo "<div class='alert alert-success'>Success, Hapus Penulis !!</div>";
			} elseif (isset($_GET['hapusPenulisFail'])) {
				echo "<div class='alert alert-danger'>Failed, Hapus Penulis !!</div>";
			} 


		?>	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Penulis</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'koneksi.php';
				$no = 1;
				$sql = "
						SELECT * FROM penulis
				";
				$query = mysql_query($sql);

				while ($data = mysql_fetch_assoc($query)) {
					echo "
						<tr>
							<td>".$no."</td>
							<td>".$data['nama_penulis']."</td>
							<td>
								<a href='?editpenulis&id=".$data['id_penulis']."' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i></a>
								<a href='?hapuspenulis&id=".$data['id_penulis']."' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
							</td>
						</tr>
					";
					$no++;
				}
			?>
		</tbody>
	</table>
</div>