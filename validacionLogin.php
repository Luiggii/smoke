<?php
	$usuer = $_POST['Usuer'];
	$pass = $_POST['Pass'];
	echo validacionLogin($usuer, $pass);

	function validacionLogin($usuer, $pass){
		$valid = true;
		$db = "usuarios";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
		$consult = "SELECT * FROM information WHERE NombreUsuario = '$usuer' AND Password = '$pass'";
		$result = mysqli_query($con, $consult) or die ("Error!");
		$fila = mysqli_fetch_array($result);
		if (!$fila['Id']) {
			$valid = false;
		}
		return $valid;
	}
?>