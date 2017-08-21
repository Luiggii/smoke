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
		$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
		$consult = "SELECT * FROM information WHERE NombreUsuario = '$usuer' AND Password = '$pass'";
		$result = mysql_query($consult, $con) or die ("Error!");
		$fila = mysql_fetch_array($result);
		if (!$fila['Id']) {
			$valid = false;
		}
		return $valid;
	}
?>