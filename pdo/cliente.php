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
			<?php $products = showArticles($con); ?>
			<div class="container">
				<div class="row">
					<?php foreach ($products as $key => $product): ?>
					<div class="thumbnail col-md-4">
						<img src="<?= $base_url.$product['imagen'] ?>">
						<div class="caption">
							<h3 class="product-name"><?= $product['nombre']?></h3>
							<p class="hidden"><?= $product['id']; ?></p>
							<p>$<?= number_format($product['precio']) ?> COP</p>
							<p>
								<button data-price="<?= $product['precio'] ?>" data-product="<?= $product['id'] ?>" class="btn btn-primary add-to-cart" role="button"><i class="material-icons">shopping_cart</i> Agregar</button>
							</p>
						</div>
					</div>		
					<?php endforeach ?>				
				</div>
				
			</div>
			
		</div>
	</div>
</div>
<div class="panel panel-default animated">
	<div class="panel-heading">Carrito de compras</div>
	<div class="panel-body">
		<ul id="shopping-list"></ul>
	</div>
	<div class="panel-footer">
		<div>$ <span id="total">0</span> COP</div>
		<button class="btn-buy" role="button">Comprar</button>			
	</div>
</div>

<?php include 'templates/footer.inc'; ?>