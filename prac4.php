<?php
$var='/^[0-9]{9}$/';
echo "	<!DOCTYPE>
		<html>
			<head><title>Practica 4</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='prac4.php'>";
	echo "<center><h3 style='color:white;'>CIFRADO SIMPLE</h3><input type='text' name='sim'><center/><br/><br/>
		<input type='submit' value='CIFRAR'><br/><br/>";
echo "</form>
	</body>
	</html>";
	if(!isset($_POST['sim']))
		echo "<center><h2 style='color:gold;'>☺☻☺☻</h2></center>";
	else
	{
		$num=$_POST['sim'];
			if(preg_match($var,$num))
				{
					$a=strrev($num);
					echo "<center><h2 style='color:gold;'>".$a."</h2></center>";
				}
				else
				{
					echo "<center><h2 style='color:gold;'>Numero invalido debe tener 9 digitos del 0-9</h2></center>";
				}
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>