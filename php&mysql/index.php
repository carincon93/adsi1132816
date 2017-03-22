<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - PHP & MYSQL</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="public/css/custom.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="text-center">CRUD - PHP & MYSQL</h1>
          <h4 class="text-center">Sistema de avatars</h4>
          <hr>
          <?php if (isset($_SESSION['action'])): ?>
            <div class="row">
              <div class="col-md-6 col-md-offset-3"></div>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php if ($_SESSION['action'] == 'Add'): ?>
                    <strong>Aviso!</strong> El avatar se registró correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'Edit'): ?>
                    <strong>Aviso!</strong> El avatar se modificó correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'Delete'): ?>
                    <strong>Aviso!</strong> El avatar se eliminó correctamente!
                  <?php endif ?>  
                </div>
            </div>
            <?php unset($_SESSION['action']); ?>
          <?php endif ?>
          <br>
          <a href="add.php" class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="Adicionar Avatar"><i class="glyphicon glyphicon-plus"></i>Avatar</a>
          <br> 
          <?php 
            include 'includes/db.php';
            $sql = "SELECT * FROM avatars";
            $result = mysqli_query($con, $sql);
          ?>
          <div class="row">
            <?php while($row = mysqli_fetch_array($result)): ?>
              <div class="col-md-4">
                <figure class="avatars" style="background: url(<?= $row['image'] ?>) center center no-repeat;">                
                  <figcaption><?= $row['name']; ?></figcaption>
                  <div class="nav">
                    <nav class="text-center">
                      <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-actions" data-toggle="tooltip" data-placement="top" title="Consultar">
                        <i class="glyphicon glyphicon-search"></i>
                      </a>
                      <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-actions" data-toggle="tooltip" data-placement="top" title="Modificar">
                        <i class="glyphicon glyphicon-pencil"></i>
                      </a>
                      <button class="btn btn-actions btn-delete" data-toggle="tooltip" data-placement="top" data-id="<?= $row['id'] ?>" title="Eliminar">
                        <i class="glyphicon glyphicon-trash"></i>
                      </button>
                    </nav>
                  </div>
                </figure>
              </div>              
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  
    

    <script src="public/js/jquery-3.1.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $('.btn-delete').click(function(event) {
          if (confirm('Realmente desea eliminar este avatar?')) {
            $id = $(this).attr('data-id');
            window.location.replace('delete.php?id='+$id);
          }
        });
      });
    </script>
  </body>
</html>

