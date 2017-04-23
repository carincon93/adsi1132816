<?php
	require 'config/app.php';
	require 'config/database.php';
	require 'config/security_admin.php';
	include 'templates/header.inc';
	include 'templates/navbar.inc';
?>

<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>Bienvenido <?= $_SESSION['unombres'] ?></h1>
			<hr>
			<ul class="nav nav-pills nav-pills-primary block-center row">
				<li class="col-md-4">
					<a href="admin/articles/">
						<i class="material-icons">card_giftcard</i>
						Artículos
					</a>
				</li>
				<li class="col-md-4">
					<a href="admin/customers/">
						<i class="material-icons">supervisor_account</i>
						Clientes
					</a>
				</li>
				<li class="col-md-4">
					<a href="admin/sales/">
						<i class="material-icons">shopping_cart</i>
						Ventas
					</a>
				</li>
			</ul>				
		</div>
	</div>
</div>

<?php include 'templates/footer.inc'; ?>