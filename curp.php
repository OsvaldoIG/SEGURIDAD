<?php
$a18=0;
$cal=0;
$con="/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[A,0][0-9]$/";
$valores=array("0"=>"0","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","A"=>"10","B"=>"11","C"=>"12","D"=>"13","E"=>"14","F"=>"15","G"=>"16","H"=>"17","I"=>"18","J"=>"19","K"=>"20","L"=>"21","M"=>"22","N"=>"23","Ñ"=>"24","O"=>"25","P"=>"26","Q"=>"27","R"=>"28","S"=>"29","T"=>"30","U"=>"31","V"=>"32","W"=>"33","X"=>"34","Y"=>"35","Z"=>"36");
echo "<!DOCTYPE>
				<html>
				<head><title>CURP</title></head>
				<body style='background-color:#000099'>
				<form method='POST' action=curp.php>";
		echo "<center><h3 style='color:white;'>INGRESE CURP:</h3><input type='text' name='curp'><center/><br/><br/>
			<input type='submit' value='VALIDAR'>
				";
	echo "</form>
	</body>
			</html>";
	if(!isset($_POST['curp']))
		echo "<center><h2 style='color:gold;'>Ingresar CURP</h2></center>";
	else
	{
		$cad=strtoupper($_POST['curp']);
		if(preg_match($con,$cad))
		{
			$cad2=str_split($cad);
				if($cad2[4]==0||$cad2[4]==1)
				{
					$con="/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[A][0-9]$/";
						if(!preg_match($con,$cad))
						{
							echo "<center><h2 style='color:gold;'>VALOR 17 SE ESPERA A</h2></center>";	
							$cal=1;
						}
				}
				else
				{
					$con="/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[0][0-9]$/";
						if(!preg_match($con,$cad))
						{
							echo "<center><h2 style='color:gold;'>VALOR 17 SE ESPERA 0</h2></center>";
							$cal=1;
						}
				}
				for($x=0;$x<=16;$x++)
				{
					$cont=18-$x;
					$por=str_replace(array_keys($valores),array_values($valores),$cad2[$x]);
					$a18=(($a18+$cont*$por)%10);
				}
				if($cad2[4]==0||$cad2[4]==1)
				{
					$a18=(10-$a18)%10;
					$con="/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[A,0][".$a18."]$/";
					if(!preg_match($con,$cad))
					{
							echo "<center><h2 style='color:gold;'>VALOR 18 SE ESPERA ".$a18."</h2></center>";
							$cal=1;
					}
				}
				else
				{
					$con="/^[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[A,0][".$a18."]$/";
					if(!preg_match($con,$cad))
					{
							echo "<center><h2 style='color:gold;'>VALOR 18 SE ESPERA ".$a18."</h2></center>";
							$cal=1;
					}
				}
				if($cal==0)
					echo "<center><h2 style='color:gold;'>CURP VALIDO</h2></center>";
		}
		else
			echo "<center><h2 style='color:gold;'>CURP INVALIDO</h2></center>";
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>