<?php
	require 'config/app.php';
	require 'config/database.php';
	require 'config/security_cliente.php';
	include 'templates/header.inc';
	include 'templates/navbar.inc';
?>

<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Bienvenido <?= $_SESSION['unombres'] ?></h1>
			<hr>
			<?php $articles = showArticles($con); ?>
			<div class="row">
				<?php foreach ($articles as $key => $article): ?>
				<div class="thumbnail col-md-4">
					<img src="<?= $base_url.$article['imagen'] ?>" width="200px">
					<div class="caption">
						<h3><?= $article['nombre']?></h3>
						<p><?= $article['precio'] ?></p>
						<p>
							<a href="#" class="btn btn-primary" role="button"><i class="material-icons">shopping_cart</i> Agregar</a>
						</p>
					</div>
				</div>		
				<?php endforeach ?>				
			</div>
		</div>
	</div>
</div>

<?php include 'templates/footer.inc'; ?>