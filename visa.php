<?php
$com="/^[4][0-9]{15}$/";
$a162=0;
$cont=0;
echo "<!DOCTYPE>
		<html>
			<head><title>VISA</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='visa.php'>";
	echo "<center><h3 style='color:white;'>INGRESE VISA</h3><input type='text' name='visa'><center/><br/>
			<input type='submit' value='VALIDAR'><br/><br/>";
		echo "</form>
			</body>
			</html>";
	if(!isset($_POST['visa']))
		echo "<center><h2 style='color:gold;'>INGRESE PARA VALIDAR</h2></center>";
	else
	{
		$visa=$_POST['visa'];			
		if(!preg_match($com,$visa))
			echo "<center><h2 style='color:gold;'>VISA INVALIDA</h2></center>";
		else
		{
			$visa2=str_split($visa);
			for($x=0;$x<=14;$x++)
			{	
				if($x%2==0)
					$mult=2;
				else
					$mult=1;
				$a16=$mult*$visa[$x];
				$a162=$a16+$a162;
				if($a16>=10)
					$cont=$cont+1;
			}
			$a16=(($a162*-1)-$cont)%10;
			if($a16<0)
				$a16=$a16*-1;
			$a16=10-$a16;
			$com="/^[4][0-9]{14}[".$a16."]$/";
				if(!preg_match($com,$visa))
					echo "<center><h2 style='color:gold;'>VISA INVALIDA ULTIMO DIGITO ES ".$a16."</h2></center>";
				else
					echo "<center><h2 style='color:gold;'>VISA VALIDA</h2></center>";
		}
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>