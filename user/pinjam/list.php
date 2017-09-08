<div class="panel-heading">
	<div class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar Buku</div>
</div>
<div class="panel-body">
	<div class="row">
		<?php
			$id_user = $_SESSION['id_user'];
			include "koneksi.php";
			$no = 1;
			$sql = "
					SELECT b.*, a.nama_penulis as nama_penulis, c.nama_kategori as nama_kategori FROM buku b
					JOIN penulis a ON b.id_penulis = a.id_penulis
					JOIN kategori c ON c.id_kategori = b.id_kategori
			";
			$query = mysql_query($sql);
			while($data = mysql_fetch_assoc($query)) {
		 ?>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/img1.jpg">
		      <div class="caption"> 
		        <h3><?= $data['nama_buku'] ?></h3>
		        <p>Penulis : <?= $data['nama_penulis'] ?> | Kategori : <?= $data['nama_kategori']?></p>
		        <p><?= $data['detail_buku'] ?></p>
		        <p><a href="?pinjambuku&id=<?= $data['id_buku']?>&id_user=<?=$id_user?>" class="btn btn-primary" role="button">Pinjam</a> 
		           <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
	  <?php } ?>
	</div>
</div>