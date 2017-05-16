<?php
$mat=[];
echo "<!DOCTYPE>
				<html>
				<head><title>Practica 3</title></head>
				<body style='background-color:#000099'>
				<form method='POST' action='prac3.php'>";
		echo "<center><h3 style='color:white;'>FRASE PARA PLAYFAIR</h3><input type='text' name='fra'><center/>
			  <center><h3 style='color:white;'>COLUMNAS</h3><input type='number' name='col' min='1'><center/><br/><br/>
			  <input type='submit' value='CODIFICAR'><br/><br/>";
	echo "</form>
		</body>
		</html>";
	if(!isset($_POST['fra'])||!isset($_POST['col']))
		echo "<center><h2 style='color:gold;'>INGRESE TODOS LOS VALORES</h2></center>";
	else
	{
		$fra=$_POST['fra'];
		$col=$_POST['col'];
		$play=str_split($fra);
		$cont=strlen($fra);
		$y=0;
		$x=-1;
		for($w=0;$w<=$cont-1;$w++)
		{
			$x=$x+1;
			$mat[$y][$x]=$play[$w];
			if($x==$col-1)
			{
				$x=-1;
				$y=$y+1;
			}
		}
		if($x==-1)
		{
			$y=$y-1;
		}
		for($x2=0;$x2<=$col-1;$x2++)
		{
			for($y2=0;$y2<=$y;$y2++)
			{
				echo "<span style='color:gold; font-size:50px'>".$mat[$y2][$x2]."</span>";
				if($x2==$x&&$y2==$y)
				$y=$y-1;
			}
			echo "<span style='color:gold; font-size:50px'>   </span>";
		}
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>