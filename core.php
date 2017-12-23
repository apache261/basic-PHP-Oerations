<?php
		if(!isset($_POST['find'])) {
		include('form.php');
		}
		elseif(isset($_POST['find'])) {
		include ('form.php');
		echo '<br/>';
		include ('results.php');	
		}
		else {
		echo 'Unexpected Error Occurred';
		}
	
?>	