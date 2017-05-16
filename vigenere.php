<?php
$mat=[];
$letra=9;
$cont=0;
$w=10;
$valores=array("A"=>"10","B"=>"11","C"=>"12","D"=>"13","E"=>"14","F"=>"15","G"=>"16","H"=>"17","I"=>"18","J"=>"19","K"=>"20","L"=>"21","M"=>"22","N"=>"23","O"=>"24","P"=>"25","Q"=>"26","R"=>"27","S"=>"28","T"=>"29","U"=>"30","V"=>"31","W"=>"32","X"=>"33","Y"=>"34","Z"=>"35");
$valores2=array("10"=>"A","11"=>"B","12"=>"C","13"=>"D","14"=>"E","15"=>"F","16"=>"G","17"=>"H","18"=>"I","19"=>"J","20"=>"K","21"=>"L","22"=>"M","23"=>"N","24"=>"O","25"=>"P","26"=>"Q","27"=>"R","28"=>"S","29"=>"T","30"=>"U","31"=>"V","32"=>"W","33"=>"X","34"=>"Y","35"=>"Z");
echo "<!DOCTYPE>
				<html>
				<head><title>VIGENERE</title></head>
				<body style='background-color:#000099'>
				<form method='POST' action='vigenere.php'>";
		echo "<center><h3 style='color:white;'>PALABRA QUE QUIERES CODIFICAR:</h3><input type='text' name='pal'><center/><br/>
		 <h3 style='color:white;'>CLAVE</h3><input type='text' name='cla'><br/><br/>
			<input type='submit' value='CODIFICAR'><br/><br/>";
		echo "<center><h3 style='color:white;'>PALABRA QUE QUIERES DECODIFICAR:</h3><input type='text' name='pal2'><center/><br/>
		 <h3 style='color:white;'>CLAVE</h3><input type='text' name='cla2'><br/><br/>
			<input type='submit' value='DECODIFICAR'><br/><br/>";
	echo "</form>
		</body>
		</html>";
	for($x=0;$x<=25;$x++)
		{
			for($y=0;$y<=25-$cont;$y++)
			{
				$letra=$letra+1;
				$letracod=str_replace(array_keys($valores2),array_values($valores2),$letra);
				$mat[$y][$x]=$letracod;
				if($letra==35)
				{
					$letra=$w;
					$w=$w+1;
				}
			}
			$cont=$cont+1;
		}
		$cont=0;
		$letra=9;
		for($x=1;$x<=25;$x++)
			{
				for($y=25-$cont;$y<=25;$y++)
				{
					$letra=$letra+1;
					$letracod=str_replace(array_keys($valores2),array_values($valores2),$letra);
					$mat[$y][$x]=$letracod;
				}
				$letra=9;
				$cont=$cont+1;
			}
	if(!isset($_POST['pal'])&&!isset($_POST['cla'])&&!isset($_POST['pal2'])&&!isset($_POST['cla2']))
	{
		echo "<center><h2 style='color:gold;'>INGRESE TODOS LOS VALORES</h2></center>";
		$pal="HOLA";
		$cla="MUNDO";
	}
	if(isset($_POST['pal'])&&isset($_POST['cla']))
	{
		$pal=strtoupper($_POST['pal']);
		$cla=strtoupper($_POST['cla']);
		$pal=str_replace(' ','',$pal);
		$cla=str_replace(' ','',$cla);
		$numpal=strlen($pal);
		$numcla=strlen($cla);
		$pal=str_split($pal);
		$cla=str_split($cla);
		$y=-1;
		//echo "<span style='color:gold; font-size:50px'>CODIFICADA:</span>";
		for($x=0;$x<=$numpal-1;$x++)
		{
		
		$palc=str_replace(array_keys($valores),array_values($valores),$pal[$x]);
		$y=$y+1;
		$clac=str_replace(array_keys($valores),array_values($valores),$cla[$y]);
		if($y==$numcla-1)
			$y=-1;
		echo "<span style='color:gold; font-size:50px'>".$mat[$palc-10][$clac-10]."</span>";
		}			
	}
	if(isset($_POST['pal2'])&&isset($_POST['cla2']))
	{
		$pal2=strtoupper($_POST['pal2']);
		$cla2=strtoupper($_POST['cla2']);
		$pal2=str_replace(' ','',$pal2);
		$cla2=str_replace(' ','',$cla2);
		$numpal2=strlen($pal2);
		$numcla2=strlen($cla2);
		$pal2=str_split($pal2);
		$cla2=str_split($cla2);
		$y=-1;
		for($x=0;$x<=$numpal2-1;$x++)
		{
			$y=$y+1;
			$clac2=str_replace(array_keys($valores),array_values($valores),$cla2[$y]);
				for($w=0;$w<=25;$w++)
				{
					if($mat[$clac2-10][$w]==$pal2[$x])
					{
						$cpal2=str_replace(array_keys($valores2),array_values($valores2),$w+10);
						echo "<span style='color:gold; font-size:50px'>".$cpal2."</span>";
						$cod=$w;
						$w=25;
					}
					
				}
			if($numcla2!=0)
			{
			if($y==$numcla2-1)
					$y=-1;
			}
			else
				$y=-1;
		}	
	}
?>