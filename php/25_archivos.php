<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manejo de Archivos con PHP</title>
</head>
<body>
	<h1>Manejo de Archivos con PHP</h1>
	<hr>

	<?php 
		//fopen - abrir el archivo
		$archivo = fopen('lorem.txt', 'r') or die('No se encontró el archivo');
		//feof - si el archivo finalizó su lectura
		while (!feof($archivo)) {
			//fget - lectura linea a linea
			echo fgets($archivo). "<br>";
		}

		echo "<br><hr><br>";

		$archivo = fopen('lorem.txt', 'r') or die('No se encontró el archivo');
		while (!feof($archivo)) {
			//fgetc - lectura caracter a caracter
			echo fgetc($archivo). "-";
		}
		//fclose - cerrar archivo
		fclose($archivo);
	?>
</body>
</html>