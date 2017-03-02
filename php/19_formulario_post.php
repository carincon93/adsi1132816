<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario (POST)</title>
</head>
<body>
	<h1>Formulario (POST)</h1>
	<hr>

	<form method="POST">
		<fieldset>
			<legend>Datos Personales</legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="Correo Electrónico" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Teléfono" value="<?php if(isset($_POST['telefono'])) echo $_POST['telefono']; ?>">
			</div>
			<div>
				<button type="submit">Enviar</button>
			</div>
		</fieldset>
		<hr>
		
		<?php 
			if ($_POST):
				$errores = 0;
				foreach ($_POST as $key => $value) {
					if (!$value) 
						$errores++;
				}
				if ($errores == 0) {
					
					// var_dump($_POST);
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$telefono = $_POST['telefono'];
					
					echo "<li>Nombre: ".$nombre."</li>";
					echo "<li>Email: ".$email."</li>";
					echo "<li>Teléfono: ".$telefono."</li>";				
				} else {
					echo "<li>Debe llenar todos los campos</li>";
				}
			endif;			
		?>
	</form>
</body>
</html>