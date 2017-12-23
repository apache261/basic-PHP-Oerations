<?php
	   $opt = trim($_POST['operation']);
		$opt = strip_tags($opt);
		$opt = htmlspecialchars($opt);
		
		$strt = trim($_POST['start']);
		$strt = strip_tags($strt);
		$strt = htmlspecialchars($strt);
		
		$end = trim($_POST['end']);
		$end = strip_tags($end);
		$end = htmlspecialchars($end);
		
		$fctr = trim ($_POST['factor']);
		$fctr =strip_tags($fctr);
		$fctr = htmlspecialchars($fctr);
	
		//check if input is a number or not
		
      echo '<div class="ans">';
if (empty($strt) && empty($end)) {
	echo 'Please Input Value on both boxes';
	}
elseif (!is_numeric($strt)  && !is_numeric($end) && !empty($strt) && !empty($end))	{
		echo 'Input integers in both boxes';
		}
elseif (empty($strt) && !empty($end) && is_numeric($end)) {
	echo 'Input  on first box is required';
		}
elseif (empty($strt) && !is_numeric($end)){
	echo '<ul>';
	echo '<li>Input on first box is Required</li>';
	echo '<li>Only integers are allowed in Second box </li>';
	echo '</ul>';
	}
elseif (!is_numeric($strt) && empty($end)){
	echo '<ul>';
	echo '<li>Only integers are allowed in First box </li>';
	echo '<li>Input on Second box is Required</li>';
	echo '</ul>';
	}
elseif (!is_numeric($strt) && is_numeric($end) && !empty($strt) ) {
			echo 'Only integers are allowed in first box';
			}
elseif (!empty($strt) && empty($end)) {
	echo 'Input on second box is required';
	}
		
elseif (is_numeric($strt) && !is_numeric($end) && !empty($end)) {
			echo 'Only Integers  are allowed in Second Box';
			}

elseif(is_numeric($strt) && is_numeric($end) && is_string($opt))	{ 	
	include ('func.php');
		include ('logic.php');
		}
	
		//true or false below will be execute
		echo '</div>';
?>