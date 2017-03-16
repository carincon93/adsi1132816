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
        <div class="col-md-10 col-md-offset-1">
          <h1 class="text-center">CRUD - PHP & MYSQL</h1>
          <h4 class="text-center">Sistema de avatars</h4>
          <hr>
          <a href="add.php" class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="Adicionar Avatar"><i class="glyphicon glyphicon-plus"></i>Avatar</a>
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
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>

