<?php
	require '../../config/app.php';
	require '../../config/database.php';
	require '../../config/security_admin.php';

	if ($_GET) {
		$id = $_GET['id'];
		$id = deleteArticle($con, $id);
	}

