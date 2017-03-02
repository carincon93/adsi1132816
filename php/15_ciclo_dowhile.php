<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (do while)</title>
</head>
<body>
	<h1>Ciclo (do while)</h1>
	<hr>


	<?php 
		//Imprimir los números del 0 al 100 de la siguiente forma: 3, 6, 9
		$num = 3;
		do {
			echo " ". $num;
			$num +=  3;
		} while ($num <= 100)
	?>
</body>
</html>