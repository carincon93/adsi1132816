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
	      		<li class="active">Modificar Cliente</li>
	      	</ol>
	      	<h4 class="text-uppercase">Modificar Cliente</h4>
	      	<hr>
	      	<?php if ($_GET): ?>
				<?php 
				$id = $_GET['id'];
				$customer = showCustomer($con, $id);
				?>
				<?php foreach ($customer as $key => $c): ?>
					<form action="" method="POST" id="frm">
			      		<div class="form-group">
			      			<input type="hidden" name="id" value="<?= $c['id'] ?>">
			      			<input type="text" class="form-control" name="nombres" placeholder="Nombres" data-validation="required" value="<?= $c['nombres'] ?>">
			      		</div>
			      		<div class="form-group">
			      			<input type="email" class="form-control" name="correo" placeholder="Correo" data-validation="required" value="<?= $c['correo'] ?>">
			      		</div>
			      		<div class="form-group">
			      			<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" data-validation="required" value="<?= $c['correo'] ?>">
			      		</div>

			      		<div class="form-group">
			      			<button type="submit" class="btn btn-success"><i class="material-icons">save</i> Modificar</button>
			      		</div>
			      	</form>
				<?php endforeach ?>
	      		<?php else: ?>
				<h5 class="text-muted">No se puede realizar la consulta!</h5>
	      	<?php endif ?>
	      	

	      	<?php 
	      		if ($_POST) {
	      			$id 		= $_POST['id'];
	      			$nombres 	= $_POST['nombres'];
	      			$correo 	= $_POST['correo'];
	      			$contrasena = $_POST['contrasena'];

	      			updateCustomer($con, $id, $nombres, $correo, $contrasena);
	      			
	      		}
	      	 ?>
		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>