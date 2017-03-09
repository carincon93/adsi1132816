<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
</head>
<body>
	<h1>Filtros</h1>
	<hr>
	<form action="" method="POST">
		<fieldset>
			<legend><h3>Número Entero</h3></legend>
			<input type="text" name="numero" placeholder="Ingrese un número">
			<button type="submit" name="btn1">Filtrar</button>
		</fieldset>
	</form>
	<form action="" method="POST">
		<fieldset>
			<legend><h3>Número Entero (Opciones)</h3></legend>
			<input type="number" name="numero" placeholder="Ingrese un número">
			<button type="submit" name="btn2">Filtrar</button>
		</fieldset>
	</form>
	<form action="" method="POST">
		<fieldset>
			<legend><h3>Correo Electrónico</h3></legend>
			<input type="text" name="correo" placeholder="Ingrese un correo electrónico">
			<button type="submit" name="btn3">Filtrar</button>
		</fieldset>
	</form>
	<form action="" method="POST">
		<fieldset>
			<legend><h3>Desinfectar</h3></legend>
			<input type="text" name="url" placeholder="Ingrese su URL">
			<button type="submit" name="btn4">Filtrar</button>
		</fieldset>
	</form>

	<?php 
		if ($_POST) {
			//Número Entero
			if (isset($_POST['btn1'])) {
				$numero = $_POST['numero'];

				if (!filter_var($numero, FILTER_VALIDATE_INT)) {
					echo "<li>No es un número entero</li>";
				} else {
					echo "<li>Si es un número entero</li>";
				}
			}

			//Número Entero (Opciones)
			if (isset($_POST['btn2'])) {
				$numero = $_POST['numero'];
				$opt = array ('options' => array('min_range' => 0, 'max_range' => 255));
				
				if (!filter_var($numero, FILTER_VALIDATE_INT, $opt)) {
					echo "<li>El número es incorrecto</li>";
				} else {
					echo "<li>El número es correcto</li>";
				}
			}
			if (isset($_POST['btn3'])) {
				$correo = $_POST['correo'];
				
				if (!filter_input(INPUT_POST , 'correo', FILTER_VALIDATE_EMAIL)) {
					echo "<li>El correo es inválido</li>";
				} else {
					echo "<li>El correo es válido</li>";
				}
			}
			//Desinfectar
			if (isset($_POST['btn4'])) {
				$url = $_POST['url'];
				
				$url = filter_input(INPUT_POST , 'url', FILTER_SANITIZE_URL);
				echo $url;
			}
		}
	?>
</body>
</html>