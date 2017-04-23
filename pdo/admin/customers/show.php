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
	      		<li><a href="<?=$base_url?>administrador.php">Menú Principal</a></li>
	      		<li><a href="index.php">Módulo Cliente</a></li>
	      		<li class="active">Consultar Cliente</li>
	      	</ol>
			<h4 class="text-uppercase">Consultar Cliente</h4>
			<hr>
			<?php if ($_GET): ?>
			<?php 
				$id = $_GET['id'];
				$customer = showCustomer($con, $id);
			 ?>
			 <?php foreach ($customer as $key => $c): ?>
			 	<table class="table table-hover">
			 		<tr>
			 			<th>ID:</th>
			 			<td><?= $c['id'] ?></td>
			 		</tr>
			 		<tr>
			 			<th>Nombre:</th>
			 			<td><?= $c['nombres'] ?></td>
			 		</tr>
			 		<tr>
			 			<th>Precio:</th>
			 			<td><?= $c['correo'] ?></td>
			 		</tr>
			 	</table>
			 <?php endforeach ?>
				<?php else: ?>	
				<h5 class="text-muted">No se puede realizar la consulta!</h5>			
			<?php endif ?>
		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>