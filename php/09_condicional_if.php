<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (if)</title>
</head>
<body>
	<h1>Condicional (if)</h1>
	<hr>

	<?php 
		$ndia = date('w');
		if($ndia == 3) {
			echo "Hoy es miércoles!";
		}
	?>
</body>
</html>