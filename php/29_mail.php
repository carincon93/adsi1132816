<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviar Correo Electrónico</title>
</head>
<body>
	<h1>Enviar Correo Electrónico</h1>
	<hr>
	<form action method="POST">
		<strong>Correo</strong><input type="email" name="email">
		<strong>Asunto</strong><input type="text" name="asunto">
		<strong>Mensaje</strong><textarea name="mensaje" cols="30" rows="10"></textarea>
		<button type="submit">Enviar</button>
	</form>

	<?php 
		if ($_POST) {
			$email = $_REQUEST['email'];
			$asunto = $_REQUEST['asunto'];
			$mensaje = $_REQUEST['mensaje'];
			$headers = "From: carincon93@gmail.com". "\r\n" ."CC: somebodyelse@example.com";

			mail($email, $asunto, $mensaje, $headers);
		}
	?>

</body>
</html>