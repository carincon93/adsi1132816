<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparación</title>
	<style>
		table {
			border-collapse: collapse;
		}
		table td, table th {
			background-color: #ddd;
			border: 1px solid #ccc;
			color: #666;
			padding: 10px;
		}
		table th {
			background-color: #999;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Operadores Comparación</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
		</tr>
		<tr>
		<?php 
			$x = 5;
			$y = 8;
		 ?>
			<td>==</td>
			<td>Es igual</td>
			<td><?= $x." == ".$y; var_dump($x == $y) ?></td>
		</tr>
		<tr>
			<td>!=</td>
			<td>No es igual</td>
			<td><?= $x." != ".$y; var_dump($x != $y) ?></td>
		</tr>
		<tr>
			<td><></td>
			<td>No es igual</td>
			<td><?= $x." <> ".$y; var_dump($x <> $y) ?></td>
		</tr>
		<tr>
			<td>></td>
			<td>Mayor que</td>
			<td><?= $x." > ".$y; var_dump($x > $y) ?></td>
		</tr>
		<tr>
			<td><</td>
			<td>Menor que</td>
			<td><?= $x." < ".$y; var_dump($x < $y) ?></td>
		</tr>
		<tr>
			<td>>=</td>
			<td>Mayor o igual que</td>
			<td><?= $x." >= ".$y; var_dump($x >= $y) ?></td>
		</tr>
		<tr>
			<td><=</td>
			<td>Menor o igual que</td>
			<td><?= $x." <= ".$y; var_dump($x <= $y) ?></td>
		</tr>
	</table>
</body>
</html>