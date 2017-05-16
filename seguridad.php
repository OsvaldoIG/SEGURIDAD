<?php
$cone=mysqli_connect("localhost","root","","usuarios");
	 echo "<!DOCTYPE>
		<html>
			<head><title>INGRESO</title></head>
			<body style='background-color:#000099'>
			<form method='POST' action='seguridad.php'>";
	echo "<center><h1 style='color:gold;'>INICIAR SESION</h1></center>";
	echo "<center><h3 style='color:white;'>USUARIO</h3><input type='text' name='usu'><center/>
		<center><h3 style='color:white;'>CONTRASEÑA</h3><input type='password' name='cont'><center/><br/>
		<input type='submit' value='INICIAR SESION'>";
		echo "<center><h1 style='color:gold;'>REGISTRARSE</h1></center>";
	echo "<center><h3 style='color:white;'>USUARIO</h3><input type='text' name='reg'><center/>
		<center><h3 style='color:white;'>CONTRASEÑA</h3><input type='password' name='contreg'><center/><br/>
	<input type='submit' value='REGISTRARSE'><br/>";
	echo "</form>
		</body>
		</html>";
	if(isset($_POST['usu'])&&isset($_POST['cont']))
	{
		$usu=$_POST['usu'];
		$cont=$_POST['cont'];
		$consulta="select * from pass where id_usu='$usu';";
		$result=mysqli_query($cone,$consulta);
		$datos=mysqli_fetch_assoc($result);
		$hash=hash('ripemd160',$cont);
				if($hash===$datos['pass'])
					header('Location:inicio.php');
				else
					echo "<span style='color:gold; font-size:30px'>USUARIO O CONTRASEÑA INVALIDOS<br/></span>";
	}		
	if(isset($_POST['reg'])&&isset($_POST['contreg']))
	{
		$usu=$_POST['reg'];
		$contreg=$_POST['contreg'];
		$consulta="select * from pass where id_usu='$usu'";
		$result=mysqli_query($cone,$consulta);
		$datos=mysqli_fetch_assoc($result);
		if($datos!=NULL)
				echo "<span style='color:gold; font-size:30px'>USUARIO YA REGISTRADO<br/></span>";
		else
		{
		
		if($usu!=NULL&&$contreg!=NULL)
		{
		$contreg= hash('ripemd160',$contreg);
		$insertar="INSERT INTO pass (id_usu,pass)VALUES('$usu','$contreg')";
		$listo=mysqli_query($cone,$insertar);
		}
		}
	}
?>