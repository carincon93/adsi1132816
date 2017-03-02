<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<h1>Funciones</h1>
	<hr>


	<?php 
		//Función sin parámetros		
		function saludo()
		{
			echo "<h2>Hola mundo!</h2>";
		}

		saludo();

		//Función con parámetros
		function bienvenida($nombre, $titulacion) {
			echo "Bienvenido: " . $nombre . "<br>";
			echo "Titulación: " . $titulacion . "<br>";
		}
		bienvenida('Camilo', 'Tecnologo');

		//Función retornar valor
		function tiempoFormacion($tiempo)
		{
			return $tiempo. " Meses";
		}
		echo "Su tiempo de formación es: " . tiempoFormacion(6);

		//Función con parámetros opcionales
		function centroDeFormacion($centro, $regional = 'Caldas')
		{
			return "Centro de Formación: " . $centro. "<br> Regional: " . $regional;
		}
		echo "<br>" . centroDeFormacion('Procesos Industriales');
	?>
</body>
</html>