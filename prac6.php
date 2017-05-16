<?php
 function strToBin($input)
  {
    if (!is_string($input))
      return false;
    $value = unpack('H*', $input);
    return bindec(base_convert($value[1], 16, 2));
  }
  function x ($car,$key)
  {
	  $xo=$car^$key &(0xFFFFFFFF);
	  return $xo;
  }
  echo "<!DOCTYPE>
		<html>
			<head><title>Practica 6</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='prac6.php'>";
	echo "<center><h3 style='color:white;'>CADENA</h3><input type='text' name='cad'><center/><br/>
			<center><h3 style='color:white;'>LLAVE</h3><input type='text' name='lla'><center/><br/><br/>
			<input type='submit' value='CIFRAR'><br/><br/>";
		echo "</form>
			</body>
			</html>";
	if(!isset($_POST['cad'])&&!isset($_POST['lla']))
		echo "<center><h2 style='color:gold;'>♥♦♣♠</h2></center>";
	else
	{
	   $inputkey=$_POST['lla'];
	  $input=$_POST['cad'];
	  $c=strToBin($input);
	  $key=strToBin($inputkey);
	  $res=x($c,$key);
	  echo "<center><h2 style='color:gold;'>".$res."</h2></center>";
	}
echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>