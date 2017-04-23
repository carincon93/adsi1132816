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
	      		<li class="active">Adicionar Cliente</li>
	      	</ol>
	      	<h4 class="text-uppercase">Adicionar Cliente</h4>
	      	<hr>
	      	<form action="" method="POST" enctype="multipart/form-data" id="frm">
	      		<div class="form-group">
	      			<input type="text" class="form-control" name="nombres" placeholder="Nombres" data-validation="required">
	      		</div>
	      		<div class="form-group">
	      			<input type="email" class="form-control" name="correo" placeholder="Correo" data-validation="required">
	      		</div>
	      		<div class="form-group">
	      			<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" data-validation="required">
	      		</div>
	      		
	      		<div class="form-group">
	      			<button type="submit" class="btn btn-success"><i class="material-icons">save</i> Adicionar</button>
	      		</div>
	      	</form>

	      	<?php 
	      		if ($_POST) {
	      			$nombres = $_POST['nombres'];
	      			$correo  = $_POST['correo'];
	      			$contrasena  = $_POST['contrasena'];
	      			   			
	      			saveCustomer($con, $nombres, $correo, $contrasena);	      			
	      		}
	      	 ?>
		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>