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
	      		<li class="active">Modificar Artículo</li>
	      	</ol>
	      	<h4 class="text-uppercase">Modificar Artículo</h4>
	      	<hr>
	      	<?php if ($_GET): ?>
				<?php 
				$id = $_GET['id'];
				$article = showArticle($con, $id);
				?>
				<?php foreach ($article as $key => $a): ?>
					<form action="" method="POST" enctype="multipart/form-data" id="frm">
			      		<div class="form-group">
			      			<input type="hidden" name="id" value="<?= $a['id'] ?>">
			      			<input type="text" class="form-control" name="nombre" placeholder="Nombre" data-validation="required" value="<?= $a['nombre'] ?>">
			      		</div>
			      		<div class="form-group">
			      			<input type="text" class="form-control" name="precio" placeholder="Precio" data-validation="required" value="<?= $a['precio'] ?>">
			      		</div>
			      		<div class="form-group">
			      			<input type="file" id="upload" class="hide" name="imagen" ">

			      			<button class="btn btn-primary btn-upload" type="button">
			      				<i class="material-icons">photo</i>
			      				Subir Imágen
			      			</button>
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
	      		if ($_FILES) {
	      			$id 	= $_POST['id'];
	      			$nombre = $_POST['nombre'];
	      			$precio = $_POST['precio'];
	      			$imagen = 'public/imgs/articles/'.$_FILES['imagen']['name'];

	      			if (!empty($_FILES['imagen']['name'])) {
	      				move_uploaded_file($_FILES['imagen']['tmp_name'], '../../'.$imagen);
	      				updateArticle($con, $id, $nombre, $precio, $imagen);
	      			} else {
	      				updateArticle($con, $id, $nombre, $precio);
	      			}
	      		}
	      	 ?>
		</div>
	</div>
</div>

<?php include '../../templates/footer.inc'; ?>