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
					} elseif (isset($_GET['listbuku'])) {
						include 'pinjam/list.php';
					} elseif (isset($_GET['pinjambuku'])) {
						include 'pinjam/pinjam.php';
					} elseif (isset($_GET['list_pinjam'])) {
						include 'pinjam/list_pinjam.php';
					} elseif (isset($_GET['savePinjam'])) {
						include 'pinjam/save.php';
					}

						else {
						echo "<h1>Selamat Datang User</h1>";
					}
				?>
			</div>
		</div>
	</div>
</div>