<?php
$mul=0;
$a102=0;
$a132=0;
echo "<!DOCTYPE>
		<html>
			<head><title>Practica 9</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='prac9.php'>";
	echo "<center><h3 style='color:white;'>ISBN-10</h3><input type='text' name='IS10'><center/><br/>
			<input type='submit' value='IMPLEMENTAR'><br/><br/>";
	echo "<center><h3 style='color:white;'>ISBN-13</h3><input type='text' name='IS13'><center/><br/>
			<input type='submit' value='IMPLEMENTAR'><br/><br/>";
		echo "</form>
			</body>
			</html>";
	if(!isset($_POST['IS10'])&&!isset($_POST['IS13']))
		echo "<center><h2 style='color:gold;'>INGRESE TODOS LOS VALORES</h2></center>";
	if(isset($_POST['IS10']))
	{
		$com="/^[0-9]{9}$/";
		$is=$_POST['IS10'];
		if(!preg_match($com,$is))
			echo "<center><h2 style='color:gold;'>NECESITAN 9 NUMEROS PARA ISBN-10</h2></center>";
		else
		{
			$is=str_split($is);
			for($x=0;$x<=8;$x++)
			{	
				$mul=$mul+1;
				$a10=$mul*$is[$x];
				$a102=$a10+$a102;
			}
			$a10=$a102%11;
			echo "<center><h2 style='color:gold;'>ULTIMO VALOR ISBN-10 ".$a10."</h2></center>";
		}
	}
	if(isset($_POST['IS13']))
	{
		$com="/^[0-9]{12}$/";
		$is=$_POST['IS13'];	
		if(!preg_match($com,$is))
			echo "<center><h2 style='color:gold;'>NECESITAN 12 NUMEROS PARA ISBN-13</h2></center>";
		else
		{
			for($x=0;$x<=11;$x++)
			{	
				if($x%2==0)
					$mult=1;
				else
					$mult=3;
				$a13=$mult*$is[$x];
				$a132=$a13+$a132;
			}
			$a13=(10-$a132)%10;
			echo "<center><h2 style='color:gold;'>ULTIMO VALOR ISBN-13 ".$a13."</h2></center>";
		}
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>