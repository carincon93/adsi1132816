<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Sesiones</h1>
	<hr>
	<form action="" method="GET">
		<button name="cerrar_sesion" type="submit">Cerrar Sesión</button>
	</form>
	
	<?php 
		if (isset($_SESSION['visitas'])) {
			$_SESSION['visitas']++;
		} else {
			$_SESSION['visitas'] = 1;
		}
		echo "Número de visitas: " . $_SESSION['visitas'];

		if (isset($_GET['cerrar_sesion'])) {
			unset($_SESSION['visitas']);
		}
			
		
	?>
</body>
</html>