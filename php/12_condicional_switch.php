<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (switch)</title>
</head>
<body>
	<h1>Condicional (switch)</h1>
	<hr>

	<?php 
		$ndia = date('w');

		switch ($ndia) {
			case '1':
				echo "Hoy es lunes!";
				break;
			case '2':
				echo "Hoy es martes!";
				break;
			case '3':
				echo "Hoy es miércoles!";
				break;
			case '4':
				echo "Hoy es jueves!";
				break;
			case '5':
				echo "Hoy es viernes!";
				break;
			default:
				echo "Feliz fin de semana!";
				break;
		}
	?>
</body>
</html>