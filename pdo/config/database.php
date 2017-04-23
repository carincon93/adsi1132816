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
				print_r($stm->errorInfo());
			}
			
			
		} catch (Exception $e) {
			
		}
	}
	//Comprar artículo
	function buyArticle($con, $id_customer, $id_article) {
		try {
		
			$sql = "INSERT INTO compras VALUES (DEFAULT, :id_customer, :id_article)";
			$stm = $con->prepare($sql);
			$stm->bindparam(':id_customer', $id_customer);
			$stm->bindparam(':id_article', $id_article);
			

			if ($stm->execute()) {
				// $_SESSION['message_action'] = 'El artículo se añadió con éxito!';
				header('location: ../cliente.php');
			} else {
				print_r($stm->errorInfo());
			}
			
			
		} catch (Exception $e) {
			
		}
	}
	//Consultar un artículo
	function showArticle($con, $id) {
		try {
			$stm = $con->prepare("SELECT * FROM articulos WHERE id = :id");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	//Modificar artículo
	function updateArticle($con, $id, $nombre, $precio, $imagen = 'default') {
		try {
			if ($imagen == 'default') {
				$sql = "UPDATE articulos SET nombre = :nombre, precio = :precio WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':id', $id);				
			} else {
				$sql = "UPDATE articulos SET nombre = :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
				$stm->bindparam(':id', $id);
			}

			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El artículo se modificó con éxito!';
				header('location: index.php');
			} else {
				print_r($stm->errorInfo());
			}
			
			
		} catch (Exception $e) {
			
		}
	}
	// Eliminar artículo
	function deleteArticle($con, $id) {
		try {
			$stm = $con->prepare("DELETE FROM articulos WHERE id = :id");
			$stm->bindparam(':id', $id);
			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El artículo se eliminó con éxito!';
				header('location: index.php');
			} else {
				print_r($stm->errorInfo());
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}

	// Obtener todos los clientes
	function showCustomers($con) {
		try {
			$stm = $con->prepare("SELECT * FROM usuarios WHERE rol = 'cliente'");
			$stm->execute();
			return $stm->fetchAll();			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	//Guardar cliente
	function saveCustomer($con, $nombres, $correo, $contrasena) {
		try {

			$sql = "INSERT INTO usuarios VALUES (DEFAULT, :nombres, :correo, :contrasena)";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombres', $nombres);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':contrasena', $contrasena);


			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El cliente se añadió con éxito!';
				header('location: index.php');
			} else {
				print_r($stm->errorInfo());
			}
			
			
		} catch (Exception $e) {
			
		}
	}
	//Consultar un cliente
	function showCustomer($con, $id) {
		try {
			$stm = $con->prepare("SELECT * FROM usuarios WHERE id = :id");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	//Modificar cliente
	function updateCustomer($con, $id, $nombres, $correo, $contrasena) {
		try {

			$sql = "UPDATE usuarios SET nombres = :nombres, correo = :correo, contrasena = :contrasena WHERE id = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(':nombres', $nombres);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':contrasena', $contrasena);
			$stm->bindparam(':id', $id);			

			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El cliente se modificó con éxito!';
				header('location: index.php');
			} else {
				print_r($stm->errorInfo());
			}
			
			
		} catch (Exception $e) {
			
		}
	}
	// Eliminar cliente
	function deleteCustomer($con, $id) {
		try {
			$stm = $con->prepare("DELETE FROM usuarios WHERE id = :id");
			$stm->bindparam(':id', $id);
			if ($stm->execute()) {
				$_SESSION['message_action'] = 'El cliente se eliminó con éxito!';
				header('location: index.php');
			} else {
				print_r($stm->errorInfo());
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}


	// Guardar compras
	function saveShopping($con, $id, $items) {
		try {
			// print_r($items);
			// Insert into DB
			foreach ($items as $key => $value) {
				$stm = $con->prepare("INSERT INTO compras VALUES (DEFAULT, $id, '$value')");
			 	if ($stm->execute()) {
			 		# code...
			 	} else {
			 		print_r($stm->errorInfo());
			 	}
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	//Ver historial de compras
	function showTotalHistory($con) {
		try {
			$stm = $con->prepare("SELECT * FROM compras c INNER JOIN articulos a ON  c.id_articulo = a.id INNER JOIN usuarios u ON c.id_usuario = u.id ORDER BY nombres ASC");
		 	if ($stm->execute()) {
				return $stm->fetchAll();
		 	} else {
		 		print_r($stm->errorInfo());
		 	}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	function total($con) {
		try {
			$stm = $con->prepare("SELECT SUM(precio) FROM articulos a INNER JOIN compras c ON c.id_articulo = a.id");
		 	if ($stm->execute()) {
				return $stm->fetch(PDO::FETCH_ASSOC);
		 	} else {
		 		print_r($stm->errorInfo());
		 	}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	function showHistory($con, $id) {
		try {
			$stm = $con->prepare("SELECT * FROM compras c INNER JOIN articulos a ON c.id_articulo = a.id WHERE c.id_usuario = $id ");
		 	if ($stm->execute()) {
				return $stm->fetchAll();
		 	} else {
		 		print_r($stm->errorInfo());
		 	}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}
	function totalPaid($con, $id) {
		try {
			$stm = $con->prepare("SELECT SUM(precio) FROM articulos a INNER JOIN compras c ON c.id_articulo = a.id WHERE c.id_usuario = $id ");
		 	if ($stm->execute()) {
				return $stm->fetch(PDO::FETCH_ASSOC);
		 	} else {
		 		print_r($stm->errorInfo());
		 	}
			
		} catch (PDOException $e) {
			echo $e->getMessage();	
		}
	}