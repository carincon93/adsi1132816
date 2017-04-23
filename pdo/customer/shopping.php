<?php 
require '../config/app.php';
require '../config/database.php';
require '../config/security_cliente.php';


$id = $_SESSION['uid'];
$items = json_decode($_POST['data']);
saveShopping($con, $id, $items);