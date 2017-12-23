<html>
	<head>
		<meta name="viewport" content="initial-scale=1; minimum-scale=1"/>
		<meta name="author" content="apache26"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		</head>
	<body>
		<?php
		
		if(file_exists('form.php') && file_exists('results.php') && file_exists('logic.php')){
			include('core.php');
			}	
		else {
		echo '	<div class="ans"> File is Missing ';
		echo '
		</div>';
		}
	?>
		
			</body>
		</html>