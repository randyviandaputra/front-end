<?php 	
	include 'koneksi.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM penulis WHERE id_penulis = $id";
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>

<div class="panel-heading">
	<div class="panel-title">Edit Penulis</div>
</div>
<div class="panel-body">
	<form class="form-horizontal" role="form" action="?editedpenulis" method="post">
		<input type="hidden" name="id_penulis" value="<?= $data['id_penulis']?>">
		<div class="form-group">
			<label for="nama_penulis" class="col-sm-2 control-label">Nama Penulis</label>
			<div class="col-sm-10">
				<input type="text" name="nama_penulis" class="form-control" id="nama_penulis" placeholder="Nama Penulis" value="<?= $data['nama_penulis']?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</form>
</div>