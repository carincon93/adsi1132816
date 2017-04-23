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
	      		<li><a href="index.php">Módulo Artículo</a></li>
	      		<li class="active">Adicionar Artículo</li>
	      	</ol>
	      	<h4 class="text-uppercase">Adicionar Artículo</h4>
	      	<hr>
	      	<form action="" method="POST" enctype="multipart/form-data" id="frm">
	      		<div class="form-group">
	      			<input type="text" class="form-control" name="nombre" placeholder="Nombre" data-validation="required">
	      		</div>
	      		<div class="form-group">
	      			<input type="text" class="form-control" name="precio" placeholder="Precio" data-validation="required">
	      		</div>
	      		<div class="form-group">
	      			<input type="file" id="upload" class="hide" name="imagen" ">

	      			<button class="btn btn-primary btn-upload" type="button">
	      				<i class="material-icons">photo</i>
	      				Subir Imágen
	      			</button>
	      		</div>
	      		<div class="form-group">
	      			<button type="submit" class="btn btn-success"><i class="material-icons">save</i> Adicionar</button>
	      		</div>
	      	</form>

	      	<?php 
	      		if ($_FILES) {
	      			$nombre = $_POST['nombre'];
	      			$precio = $_POST['precio'];
	      			$imagen = 'public/imgs/articles/'.$_FILES['imagen']['name'];

	      			if (!empty($_FILES['imagen']['name'])) {
	      				move_uploaded_file($_FILES['imagen']['tmp_name'], '../../'.$imagen);
	      				saveArticle($con, $nombre, $precio, $imagen);
	      			} else {
	      				saveArticle($con, $nombre, $precio);
	      			}
	      		}
	      	 ?>
		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>