<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - PHP & MYSQL</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="text-center">Adicionar Avatar</h1>
          <hr>
          <ol class="breadcrumb">
      		<li><a href="index.php">Inicio</a></li>
      		<li class="active">Adicionar Avatar</li>
      	</ol>
          <form action="" method="POST">
          	<div class="form-group">
          		<input type="text" class="form-control" name="name" placeholder="Nombre">
          	</div>
          	<div class="form-group">
          		<select name="gender" class="form-control">
          			<option>Genero...</option>
          			<option value="Masculino">Masculino</option>
          			<option value="Femenino">Femenino</option>
          		</select>
          	</div>
          	<div class="form-group">
          		<button class="btn btn-default btn-upload">
          			<i class="glyphicon glyphicon-user"></i>
          			Cargar foto
          		</button>
          		<input type="file" id="upload" name="image" accept="image/*" style="display: none">
          	</div>
          	<div class="form-group">
          		<input type="color" name="color" placeholder="Color">
          	</div>
          	<div class="form-group">
          		<button type="submit" class="btn btn-success">Enviar</button>
          		<button type="reset" class="btn">Limpiar</button>
          	</div>
          </form>
          <?php 
            include 'includes/db.php';
          ?>
        </div>
      </div>
    </div>    

    <script src="public/js/jquery-3.1.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script>
    	$(document).ready(function() {
    		$('.btn-upload').click(function() {
    			$('#upload').click();
    		});
    	});
    </script>
  </body>
</html>