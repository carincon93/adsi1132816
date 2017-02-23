<?php 
	
if ($_GET) {
	$marca = $_GET['marca'];

	if ($marca == 1) {
		echo "<option>HighBall</option>
			<option>Heckler</option>
			<option>Bronson</option>
			<option>Nomad</option>";
	}
	if ($marca == 2) {
		echo "<option>RockHopper</option>
			<option>StumpJumper</option>
			<option>Crave</option>
			<option>Enduro</option>";
	}
	if ($marca == 3) {
		echo "<option>Caliber</option>
			<option></option>
			<option>Bronson</option>
			<option>Nomad</option>";
	}
	if ($marca == 4) {
		echo "<option>HighBall</option>
			<option>Heckler</option>
			<option>Bronson</option>
			<option>Nomad</option>";
	}
}
