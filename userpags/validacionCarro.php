<?php
	function validacion($idObjeto, $idUsuario){
		$v = false;
		$db = "usuarios";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos.");
		mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
		$consult = "SELECT * FROM micarrodecompras WHERE IdObjeto = $idObjeto and IdUsuario = $idUsuario";
		$result = mysqli_query($con, $consult) or die ("Error!");
		$fila = mysqli_fetch_array($result);
		mysqli_close($con);
		if ($fila['IdObjeto'] == $idObjeto) {
			$v = true;
		}
	return ($v);
	}
?>