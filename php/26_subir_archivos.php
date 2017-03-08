<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivos</title>
</head>
<body>
	<h1>Subir Archivos</h1>
	<hr>
	
	<form action="" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend><h2>Subir Fotos</h2></legend>
			<input type="file" name="foto" accept="image/*">
			<br>
			<button type="submit">Subir Foto</button>
		</fieldset>
	</form>
	<?php 
		if ($_FILES) {
			if ($_FILES['foto']['size'] < 1000000 && $_FILES['foto']['type'] == 'image/png') {
				# code...
			
				if ($_FILES['foto']['error'] > 0) {
					echo "Error: ".$_FILES['foto']['error'];
				} else {
					echo "<li>Nombre: 	". $_FILES['foto']['name']."</li>";
					echo "<li>Tipo: 	". $_FILES['foto']['type']."</li>";
					echo "<li>Tamaño: 	". $_FILES['foto']['size'] / 1024 . " Kb </li>";
					echo "<li>Almacenado Temporal: ". $_FILES['foto']['tmp_name']."</li>";

					if (file_exists('subir/'.$_FILES['foto']['name'])) {
						echo "El archivo ".$_FILES['foto']['name']." ya existe!";
					} else {
						move_uploaded_file($_FILES['foto']['tmp_name'],
						'subir/' . $_FILES['foto']['name']);

						echo "El archivos se subió con exito!";
					}
				}
			} else {
				echo "Error: La imagen no es png o es muy grande!";
			}
		}
	?>
</body>
</html>