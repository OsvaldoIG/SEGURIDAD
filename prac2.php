<?php
$car=array("a"=>"|","b"=>"°","c"=>"¬","d"=>"!","e"=>"#","f"=>"$","g"=>"%","h"=>"&","i"=>"/","j"=>"?","k"=>"=","l"=>"æ","m"=>"~","n"=>"@","o"=>"↨","p"=>"☼","q"=>"¶","r"=>"☻","s"=>"◙","t"=>"Ç","u"=>"£","v"=>"µ","w"=>"╣","x"=>"«","y"=>"┤","z"=>"Ý"," "=>"¼",","=>"*","."=>"☺","1"=>"‗","0"=>"§","2"=>"±","3"=>"ƒ","4"=>"╚","5"=>"■","6"=>"♥","7"=>"♦","8"=>"♣","9"=>"♠");
$card=array("|"=>"a","°"=>"b","¬"=>"c","!"=>"d","#"=>"e","$"=>"f","%"=>"g","&"=>"h","/"=>"i","?"=>"j","="=>"k","æ"=>"l","~"=>"m","@"=>"n","↨"=>"o","☼"=>"p","¶"=>"q","☻"=>"r","◙"=>"s","Ç"=>"t","£"=>"u","µ"=>"v","╣"=>"w","«"=>"x","┤"=>"y","Ý"=>"z","¼"=>" ","*"=>",","☺"=>".","‗"=>"1","§"=>"0","±"=>"2","ƒ"=>"3","╚"=>"4","■"=>"5","♥"=>"6","♦"=>"7","♣"=>"8","♠"=>"9");
echo "<!DOCTYPE>
				<html>
				<head><title>Practica 2</title></head>
				<body style='background-color:#000099'>
				<form method='POST' action='prac2.php'>";
		echo "<center><h3 style='color:white;'>PALABRA QUE QUIERES CODIFICAR:</h3><input type='text' name='cif'><center/><br/><br/>
			<input type='submit' value='CODIFICAR'>";
		echo "<h3 style='color:white;'>PALABRA QUE QUIERES DESCIFRAR:</h3><input type='text' name='des'><br/><br/>
			<input type='submit' value='DESCIFRAR'>";
	echo "</form>
		</body>
		</html>";
	if(!isset($_POST['cif'])&&!isset($_POST['des']))
	{
		echo "<center><h2 style='color:gold;'>Hola mundo</h2></center>";
	}
	if(isset($_POST['cif']))
	{
			$cad=strtolower($_POST['cif']);
			$cod=str_replace(array_keys($car),array_values($car),$cad);
			echo "<center><h2 style='color:gold;'>".$cod."</h2></center>";
	}
	if(isset($_POST['des']))
	{
		$cadd=$_POST['des'];
		$codd=str_replace(array_keys($card),array_values($card),$cadd);
		echo "<center><h2 style='color:gold;'>".$codd."</h2></center>";
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>