<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (if / elseif)</title>
</head>
<body>
	<h1>Condicional (if / elseif)</h1>
	<hr>

	<?php 
		$ndia = date('w');
		if($ndia == 1) {
			echo "Hoy es lunes!";
		} 
		elseif($ndia == 2) {
			echo "Hoy es martes!";
		}
		elseif($ndia == 3) {
			echo "Hoy es miércoles!";
		}
		elseif($ndia == 4) {
			echo "Hoy es jueves!";
		}
		elseif($ndia == 5) {
			echo "Hoy es viernes!";
		}
		else {
			echo "Feliz fin de semana!";
		}

	?>
</body>
</html>