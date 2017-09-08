<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM kategori where id_kategori = $id";
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>

<div class="panel-heading">
	<div class="panel-title">Edit Kategori</div>
</div>
<div class="panel-body">
	<form class="form-horizontal" role="form" action="?editedkategori" method="post">
		<input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']?>">
		<div class="form-group">
			<label for="nama_kategori" class="col-sm-2 control-label">Nama Kategori</label>
			<div class="col-sm-10">
				<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Nama Kategori" value="<?= $data['nama_kategori']?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</form>
</div>