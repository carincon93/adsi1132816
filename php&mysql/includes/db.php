<?php 
	$con = mysqli_connect('localhost','root','','adsi1132816');

	if (mysqli_connect_errno()) {
		echo "<div class='alert alert-danger'>Error al conectar a MYSQL ".mysqli_connect_error()."</div>";
	}