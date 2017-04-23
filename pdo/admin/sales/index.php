<?php
	require '../../config/app.php';
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../templates/header.inc';
	include '../../templates/navbar.inc';
?>

<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
	      		<li><a href="<?=$base_url?>cliente.php">Menú Principal</a></li>
	      		<li class="active">Módulo de Total Ventas</li>
	      	</ol>
			<h4 class="text-uppercase">Módulo de Total Ventas</h4>
			<hr>
			<?php if (isset($_SESSION['message_action'])): ?>				
			<div class="alert alert-success">
			    <div class="container-fluid">
				  <div class="alert-icon">
					<i class="material-icons">check</i>
				  </div>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons">clear</i></span>
				  </button>
			      <b>Aviso: </b><?= $_SESSION['message_action'] ?>
			    </div>
			</div>
				<?php unset($_SESSION['message_action']); ?>
			<?php endif ?>
			<table class="table table-hover">
				<caption>
					<?php $total = total($con) ?>
					<?php foreach ($total as $key => $value): ?>
						<span>Total vendido: $<?= number_format($value) ?> COP</span>
					<?php endforeach ?>					
				</caption>
				<thead>
					<th>#</th>
					<th>Nombre Producto</th>
					<th>Precio</th>
					<th>Comprador</th>
				</thead>
				<tbody>
					<?php $count = 0 ?>
					<?php $products = showTotalHistory($con); ?>
					<?php foreach ($products as $key => $product): ?>
						<tr>
							<td><?= ++$count ?></td>
							<td><?= $product['nombre']?></td>
							<td>$<?= number_format($product['precio'])?></td>
							<td><?= $product['nombres']?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>