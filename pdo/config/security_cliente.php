<?php 
$base_url = 'http://localhost/adsi1132816/pdo/';
	if (!isset($_SESSION['urol'])) {
			header("location:".$base_url."index.php");
	} else {
		if ($_SESSION['urol'] == 'administrador') {
			header("location:".$base_url."index.php");
		}
	}