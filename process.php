<html>
<head>
<title> Process </title>
<style>
a {
 color:#ffffff;

}
b {
 background:#008080;
border-radius:20px;
padding:20px; 
margin:100px;
}

</style>
</head>
<body>

<?php
$in_temp = $_POST['temp'];

echo 'Your Temperature is '. $in_temp;
echo '<hr></hr>';

if ($in_temp >= 100)
	{
	echo 'Opps, Temp to High';
	}
	elseif ($in_temp == 37)
		{
		echo 'Normal';
		}
	elseif ($in_temp <= 5)
		{
		echo 'Its, cold';
		}
	else
	{
	echo 'ok';
	}
?>
<br></br>
<a href="index.php"><b>Return</b></a>


</body>
</html>