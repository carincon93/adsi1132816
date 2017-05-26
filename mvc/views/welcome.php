<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios desde la BD (MVC)</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="text-center">Lista de Usuarios desde la BD (MVC)</h1>
                    <hr>
                    <h3 class="lead">Datos de Usuarios (BD)</h3>
                    <a class="btn btn-success" href="?q=add">Añadir<i class="glyphicon glyphicon-plus"></i></a>
                    
                    <table class="table table-stripped table-hover">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d): ?>
                                <tr>
                                    <td><?= $d ['documento']; ?></td>
                                    <td><?= $d ['nombres']; ?></td>
                                    <td><?= $d ['telefono']; ?></td>
                                    <td><?= $d ['direccion']; ?></td>
                                    <td><?= $d ['ciudad']; ?></td>
                                    <td><?= $d ['correo']; ?></td>                          
                                    <td>
                                        <a class="btn btn-info" href="?q=edit&id=<?= $d['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a class="btn btn-warning" href="?q=list&id=<?= $d['id']; ?>"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                        <a class="btn btn-danger" href="?q=delete&id=<?= $d['id']; ?>" onclick="return confirm('Eliminar registro?')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>                    
                        
            </div>
        </div>
    </div>
    
</body>
</html>