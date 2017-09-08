<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM 
		buku 
		WHERE id_buku = $id
	";

	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>


<div class="panel-heading">
	<div class="panel-title">Edit Buku</div>
</div>
<div class="panel-body">
	<form class="form-horizontal" role="form" action="?editedbuku" method="post">
		<input type="hidden" name="id_buku" value="<?= $data['id_buku']?>">
		<div class="form-group">
			<label for="nama_buku" class="col-sm-2 control-label">Nama Buku</label>
			<div class="col-sm-10">
				<input type="text" name="nama_buku" class="form-control" id="nama_buku" placeholder="Nama Buku"  value="<?= $data['nama_buku']?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Detail Buku</label>
			<div class="col-sm-10">
				<textarea name="detail_buku" class="form-control" placeholder="" rows="3"><?= $data['detail_buku']?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Penulis</label>
			<div class="col-sm-10">
				<select name="id_penulis" class="form-control">
					<?php 
						include 'koneksi.php';

						$sql = "SELECT * FROM penulis";
						$query = mysql_query($sql);
						while ($penulis = mysql_fetch_assoc($query)) {
							$selected_pen = ($penulis['id_penulis'] == $data['id_penulis']) ? 'selected="selected"' : '';
							echo "<option value='".$penulis['id_penulis']."' ".$selected_pen.">".$penulis['nama_penulis']."</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kategori</label>
			<div class="col-sm-10">
				<select name="id_kategori" class="form-control">
					<?php  
						include 'koneksi.php';

						$sql = "SELECT * FROM kategori";
						$query = mysql_query($sql);
						while ($kategori = mysql_fetch_assoc($query)) {
							$selected_kat = ($kategori['id_kategori'] == $data['id_kategori']) ? 'selected="selected"' : '';
							echo "<option value='".$kategori['id_kategori']."' ".$selected_kat.">".$kategori['nama_kategori']."</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</form>
</div>