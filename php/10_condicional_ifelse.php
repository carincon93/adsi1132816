<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (if / else)</title>
</head>
<body>
	<h1>Condicional (if / else)</h1>
	<hr>

	<?php 
		$ndia = date('w');
		if($ndia == 0) {
			echo "Hoy es domingo!";
		} else {
			echo "No es fin de semana!";
		}
	?>
</body>
</html>