<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mktime</title>
</head>
<body>
	<h1>mktime</h1>
	<hr>
	<form action="" method="POST">
		<fieldset>
			<legend><h1>Calcular Años Vividos</h1></legend>
			<input type="text" name="dia" placeholder="dia">
			<input type="text" name="mes" placeholder="mes">
			<input type="text" name="ano" placeholder="año">
			<br>
			<button type="submit">Calcular</button>
		</fieldset>
	</form>
	<?php 
		if($_POST) {
			$dia = $_POST['dia'];
			$mes = $_POST['mes'];
			$ano = $_POST['ano'];

			$factual = mktime(0,0,0,date('m'),date('d'),date('Y'));
			$fnacimiento = mktime(0,0,0,$mes,$dia,$ano);

			$ftotal = $factual - $fnacimiento;
			$ftotal = (((($ftotal / 60) / 60 ) / 24 ) / 365);

			echo "<h3> El número de años: ".floor($ftotal)."</h3>";
		}
	?>
	
</body>
</html>