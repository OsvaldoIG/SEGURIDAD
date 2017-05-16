<?php
 function strToBin($input)
  {
    if (!is_string($input))
      return false;
    $value = unpack('H*', $input);
    return bindec(base_convert($value[1], 16, 2));
  }
  function mov ($cos2)
  {
	$res=$cos2>>2;
	return $res;
  }
  echo "<!DOCTYPE>
		<html>
			<head><title>Practica 5</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='prac5.php'>";
	echo "<center><h3 style='color:white;'>CIFRADO XOR</h3><input type='text' name='xor'><center/><br/><br/>
		<input type='submit' value='CIFRAR'><br/><br/>";
	echo "</form>
		</body>
		</html>";
	if(!isset($_POST['xor']))
		echo "<center><h2 style='color:gold;'>♥♦♣♠</h2></center>";
	else
	{
	  $cos=$_POST['xor'];
	  $cos2=strToBin($cos);
	  $res= mov($cos2);
	  echo "<center><h2 style='color:gold;'>".$res."</h2></center>";
	}
		echo "<center><p><a href='inicio.php' style='background-color:gray; color:#800000; font-size:20px; border:solid'>REGRESAR</a></p></center>";

?>
