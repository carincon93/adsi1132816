<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrices</title>
</head>
<body>
	<h1>Matrices</h1>

	<?php 
		//La forma larga (Incorrecta)
		$vh1 = "Volkswagen";
		$vh2 = "Renault";
		$vh3 = "Chevrolet";
		$vh4 = "Mazda";
		$vh5 = "Ford";

		//La forma corta (Correcta) - Indices Automáticos
		$vehiculos = array('Volkswagen', 'Renault', 'Chevrolet', 'Mazda', 'Ford');

		//Indices Manauales
		$vehiculos[5] = 'Kia';
		$vehiculos[6] = 'Fiat';
		$vehiculos[7] = 'Toyota';
		$vehiculos[8] = 'Hyundai';

		echo "<h3>Númericos: </h3>";
		var_dump($vehiculos);

		echo "<br> Mi vehiculo favorito es: " . $vehiculos[7];

		//Asociativos
		$referencias =  array('Volkswagen' => 'Golf',
							'Renault' => 'Duster',
							'Chevrolet' => 'Traker',
							'Mazda' => 'CX6',
							'Ford' => 'Fusion');

		$referencias['Kia'] = 'Picanto';
		$referencias['Fiat'] = 'Palio';
		$referencias['Toyota'] = 'Prado';
		$referencias['Hyundai'] = '130';

		echo "<h3>Asociativos: </h3>";
		var_dump($referencias);

		echo "<br> Mi refencia favorita es: " . $referencias['Hyundai'];

		//Multidimensionales
		$marcasVehiculos = array(
			'Mitsubishi' => array('Lancer', 'Eclipse'),
			'Lamborghini' => array('Murcielago','Gallardo')
		);
		echo "<h3>Multidimensionales: </h3>";
		var_dump($marcasVehiculos);

		echo "<br> Mi marca de vehiculo favorita es: " . $marcasVehiculos['Mitsubishi'][1];			

	?>
</body>
</html>