<?php
	require 'config/app.php';
	require 'config/database.php';
	require 'config/redirect.php';
	include 'templates/header.inc';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Sistema ventas PDO/MYSQL</h1>
			<hr>
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingreso de usuarios</h3>
			  </div>
			  <div class="panel-body">
			  <?php 
	  			if($_SERVER['REQUEST_METHOD'] == 'POST'){

		  			$correo 	= $_POST['correo'];
		  			$contrasena = $_POST['contrasena'];

					if(login($con, $correo, $contrasena)) {

						if ($_SESSION['urol'] == 'administrador') {
							header("location:administrador.php");
						} else if ($_SESSION['urol'] == 'cliente') {
							header("location:cliente.php");
						}
						echo "<div class='alert alert-success alert-dimissible'>Datos correctos</div>";
					} else {
						echo "<div class='alert alert-danger'>
							    <div class='container-fluid'>
								  <div class='alert-icon'>
								    <i class='material-icons'>error_outline</i>
								  </div>
								  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									<span aria-hidden='true'><i class='material-icons'>clear</i></span>
								  </button>
							      <b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
							    </div>
							</div>";
					}
					
					$con = null;
	  			}
			 ?>
			  	<div class="row">
			  		<div class="col-md-8 col-md-offset-2">
					    <form method="POST">
					    	<div class="form-group">
					    		<input type="text" class="form-control" name="correo" placeholder="Correo Electrónico" data->
					    	</div>
					    	<div class="form-group">
					    		<input type="password" class="form-control" name="contrasena" placeholder="Digite su contraseña">
					    	</div>
					    	<div class="form-group">
					    		<input type="submit" value="Ingresar" class="btn btn-default">
					    	</div>
				    	</form>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

<?php include 'templates/footer.inc';?>