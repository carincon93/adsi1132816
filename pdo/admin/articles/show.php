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
	      		<li><a href="../../">Menú Principal</a></li>
	      		<li><a href="index.php">Módulo Artículo</a></li>
	      		<li class="active">Consultar Artículo</li>
	      	</ol>
			<h4 class="text-uppercase">Consultar Artículo</h4>
			<hr>
			<?php if ($_GET): ?>
			<?php 
				$id = $_GET['id'];
				$article = showArticle($con, $id);
			 ?>
			 <?php foreach ($article as $key => $a): ?>
			 	<table class="table table-hover">
			 		<tr>
			 			<th>ID:</th>
			 			<td><?= $a['id'] ?></td>
			 		</tr>
			 		<tr>
			 			<th>Nombre:</th>
			 			<td><?= $a['nombre'] ?></td>
			 		</tr>
			 		<tr>
			 			<th>Precio:</th>
			 			<td><?= $a['precio'] ?></td>
			 		</tr>
			 		<tr>
			 			<th>Imágen:</th>
			 			<td><img src="<?= $base_url.$a['imagen'] ?>" width="200px"></td>
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