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
				<h1 class="text-center">Bienvenidos (MVC)</h1>
				<hr>
				<h3 class="lead">Agregar Usuario (Arreglo)</h3>
				<form action="" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="documento" placeholder="Documento" data-validation="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="Nombres" data-validation="required">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="telefono" placeholder="Teléfono" data-validation="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="direccion" placeholder="Dirección" data-validation="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" data-validation="required">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" data-validation="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" data-validation="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Agregar</button>
	                    <a href="./" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left">Volver</i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
