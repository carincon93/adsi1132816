<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario (GET)</title>
</head>
<body>
	<h1>Formulario (GET)</h1>
	<hr>

	<form method="GET">
		<fieldset>
			<legend>Datos Personales</legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" value="<?php if(isset($_GET['nombre'])) echo $_GET['nombre']; ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="Correo Electrónico" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>">
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Teléfono" value="<?php if(isset($_GET['telefono'])) echo $_GET['telefono']; ?>">
			</div>
			<div>
				<button type="submit">Enviar</button>
			</div>
		</fieldset>
		<hr>
		
		<?php 
			if ($_GET):
				$errores = 0;
				foreach ($_GET as $key => $value) {
					if (!$value) 
						$errores++;
				}
				if ($errores == 0) {
					
					// var_dump($_GET);
					$nombre = $_GET['nombre'];
					$email = $_GET['email'];
					$telefono = $_GET['telefono'];
					
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