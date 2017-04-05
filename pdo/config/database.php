<?php 
		try {

			$con = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
			$con->exec('set names utf8');
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	// login
	function login($con, $correo, $contrasena){

		try {

			$stm = $con->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena LIMIT 1");
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':contrasena', $contrasena);
			$stm->execute();

			if ($stm->rowCount() > 0){

				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid'] 		= $urow['id'];
				$_SESSION['unombres'] 	= $urow['nombres'];
				$_SESSION['urol'] 		= $urow['rol'];

				return true;
			} else {
				return false;
			}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	// Obtener todos los articulsos
	function showArticles($con) {
		try {
			$stm = $con->prepare("SELECT * FROM articulos");
			$stm->execute();
			return $stm->fetchAll();			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	//Guardar artículo
	function saveArticle($con, $nombre, $precio, $imagen = 'default') {
		try {
			if ($imagen == 'default') {
				$sql = "INSERT INTO articulos VALUES (DEFAULT, :nombre, :precio, DEFAULT)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
			} else {
				$sql = "INSERT INTO articulos VALUES (DEFAULT, :nombre, :precio, :imagen)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
			}

			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El artículo se añadió con éxito!';
				header('location: index.php');
			} else {
				header('location: index.php');
			}
			
			
		} catch (Exception $e) {
			
		}
	}