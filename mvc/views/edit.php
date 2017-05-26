<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios (Modelo Vista Controlador)</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Editar (MVC)</h1>
			<hr>
			<h3 class="lead">Editar Usuario (Arreglo)</h3>
			<form method="POST">
			<?php foreach ($data as $d): ?>
				
				<div class="form-group">
					<input type="hidden" name="id" value="<?=$d['id']?>">
					<input type="number" class="form-control" name="documento" placeholder="Documento" data-validation="required" value="<?=$d['documento']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nombres" placeholder="Nombres" data-validation="required" value="<?=$d['nombres']?>">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="telefono" placeholder="Teléfono" data-validation="required" value="<?=$d['telefono']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="direccion" placeholder="Dirección" data-validation="required" value="<?=$d['direccion']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" data-validation="required" value="<?=$d['ciudad']?>">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" data-validation="required" value="<?=$d['correo']?>">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" data-validation="required" value="<?=$d['correo']?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>Editar</button> 
                	<a href="./" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left">Volver</i></a>
				</div>

			</form>
			<?php endforeach ?>
		</div>
	</div>
</div>

</body>
</html>