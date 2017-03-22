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
        <div class="col-md-6 col-md-offset-3">
          <h1 class="text-center">Consultar Avatar</h1>
          <hr>
          <ol class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>
          <li class="active">Consultar Avatar</li>
        </ol>
        <?php if (isset($_GET['id'])): ?>
          <?php 
            include 'includes/db.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM avatars WHERE id = $id";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)):
          ?>            
        <div class="panel panel-default">
          <div class="panel-heading text-center"><?= $row['name'] ?></div>
          <div class="panel-body">
            <table class="table text-center">
              <tr>
                <td><img src="<?= $row['image']  ?>"></td>
              </tr>
              <tr>
                <td><?= $row['gender'] ?></td>
              </tr>
              <tr>
                <td style="background-color: <?= $row['color'] ?>">Color</td>
              </tr>
            </table>
          </div>
        </div>
          <?php 
            endwhile;
            mysqli_close($con); 
          ?>
        <?php endif ?>
        
        
          
        </div>
      </div>
    </div>    

    <script src="public/js/jquery-3.1.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script></script>
  </body>
</html>