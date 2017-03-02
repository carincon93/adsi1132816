<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (for)</title>
</head>
<body>
	<h1>Ciclo (for)</h1>
	<hr>

	<?php 
		//Imprimir 100 colores desde rojo hasta negro

		for ($i=200; $i >= 0 ; $i -= 2) { 
			echo "<div style='background-color: rgb(".$i.", 0, 0); height: 100px'></div>";}
	?>
		
		
</body>
</html>