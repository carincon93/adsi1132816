<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadenas PHP</title>
</head>
<body>
	<h1>Cadenas PHP</h1>
	<hr>

	<?php 
		$cadena1 = 'ADSI 1132816';
		$cadena2 = "Hola mundo $cadena1";

		$cadena3 = 'Centro de Procesos Industriales';
		$cadena4 = 'SENA Regional Caldas';
		$cadenar = $cadena3.' '.$cadena4;
	 ?>

	 <h1><?=$cadena2 ?></h1>
	 <hr>
	 <h1>La cadena: <?=$cadenar?> tiene <?php echo strlen($cadenar)?> caracteres!</h1>
	 <h3>La palabra Procesos en la cadena: <?=$cadenar ?> esta en la posición <?php echo strpos($cadenar, 'Procesos') ?></h3>
</body>
</html>