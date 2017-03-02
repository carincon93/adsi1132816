<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas (date)</title>
</head>
<body>
	<h1>Fechas (date) <?php echo date('d-m-Y') ?></h1>
	<hr>

	<p>Mi fecha de nacimiento: <?php echo date('d-m-Y', mktime(0,0,0,04,12,1993)); ?></p>

	<?php echo mktime(0,0,0,04,12,1993); ?>

	<?php 
		$manana = mktime(0,0,0, date('m'), date('d') + 1, date('Y'));
		echo "<br> Mañana es " . date('d-m-Y', $manana);
	?>
</body>
</html>