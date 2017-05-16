<?php 
function div ($a,$b)
{
	$c=($a)%$b;
	if($c<0)
		$c=$c+$b;	
	return $c;	
}
	echo "
			<!DOCTYPE>
				<html>
				<head><title>Practica 1</title></head>
				<body style='background-color:#000099'>
				<form method='POST' action='prac1.php'>";
		echo "<center><h3 style='color:white;'>PRIMER NUMERO:</h3><input type='number' name='num1'><center/><br/>
			<h3 style='color:white;'>SEGUNDO NUMERO:</h3><input type='number' name='num2'><br/><br/>
			<input type='submit' value='Modulo'>
				";
	echo "</form>
	</body>
			</html>";
	if(!isset($_POST['num1']))
	{
		$a=22;
		$b=7;
	}
	else
	{
		$a=$_POST['num1'];
		$b=$_POST['num2'];
	}
	if($b!=0)
	{
		$c=div($a,$b);
		echo "<h1 style='color:gold;'>El modulo de ".$a." entre ".$b." es ".$c."</h1>";
	}
	else
		echo "<h1 style='color:gold;'>NO se puede dividir entre 0</h1>";
	echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";
?>
