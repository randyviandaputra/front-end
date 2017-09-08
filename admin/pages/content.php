<div class="page-content">
   	<div class="row">
		<div class="col-md-2">
			<?php include 'menu.php'; ?>
		</div>
		<div class="col-md-10">
			<div class="content-box-large">
				<?php 
					if (isset($_GET['act_signup'])) {
						include 'act_signup.php';
					} elseif (isset($_GET['books'])) {
						include 'buku/list.php';
					} elseif (isset($_GET['addbuku'])) {
						include 'buku/add.php';
					} elseif (isset($_GET['savebuku'])) {
						include 'buku/save.php';
					} elseif (isset($_GET['editbuku'])) {
						include 'buku/edit.php';
					} elseif (isset($_GET['editedbuku'])) {
						include 'buku/edited.php';
					} elseif (isset($_GET['penulis'])) {
						include 'penulis/list.php';
					} elseif (isset($_GET['addpenulis'])) {
						include 'penulis/add.php';
					} elseif (isset($_GET['savepenulis'])) {
						include 'penulis/save.php';
					} elseif (isset($_GET['kategori'])) {
						include 'kategori/list.php';
					} elseif (isset($_GET['addkategori'])) {
						include 'kategori/add.php';
					} elseif (isset($_GET['savekategori'])) {
						include 'kategori/save.php';
					} elseif (isset($_GET['editkategori'])) {
						include 'kategori/edit.php';
					} elseif (isset($_GET['editedkategori'])) {
						include 'kategori/edited.php';
					} elseif (isset($_GET['editpenulis'])) {
						include 'penulis/edit.php';
					} elseif (isset($_GET['editedpenulis'])) {
						include 'penulis/edited.php';
					} elseif (isset($_GET['hapuskategori'])) {
						include 'kategori/hapus.php';
					} elseif (isset($_GET['hapuspenulis'])) {
						include 'penulis/hapus.php';
					} elseif (isset($_GET['hapusbuku'])) {
						include 'buku/hapus.php';
					}


						else {
						echo "<h1>Selamat Datang Admin</h1>";
					}
				?>
			</div>
		</div>
	</div>
</div>