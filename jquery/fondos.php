<?php 

	if ($_POST):
		$bg = $_POST['bg'];
		if ($bg == 'bg1'):
			echo 'url(imgs/bg1.jpg)';
		endif;
		if ($bg == 'bg2'):
			echo 'url(imgs/bg2.jpg)';
		endif;
	endif;