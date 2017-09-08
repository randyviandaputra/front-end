<div class="panel-heading">
	<div class="panel-title">Tambah Buku</div>
</div>
<div class="panel-body">
	<form class="form-horizontal" role="form" action="?savebuku" method="post">
		<div class="form-group">
			<label for="nama_buku" class="col-sm-2 control-label">Nama Buku</label>
			<div class="col-sm-10">
				<input type="text" name="nama_buku" class="form-control" id="nama_buku" placeholder="Nama Buku">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Detail Buku</label>
			<div class="col-sm-10">
				<textarea name="detail_buku" class="form-control" placeholder="Detai Buku" rows="3"></textarea>
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
						while ($data = mysql_fetch_assoc($query)) {
							echo "<option value='".$data['id_penulis']."'>".$data['nama_penulis']."</option>";
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
						while ($data = mysql_fetch_assoc($query)) {
							echo "<option value='".$data['id_kategori']."'>".$data['nama_kategori']."</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</form>
</div>