<?php
	function validacion($idObjeto, $idUsuario){
		$v = false;
		$db = "usuarios";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos.");
		mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
		$consult = "SELECT * FROM micarrodecompras WHERE IdObjeto = $idObjeto and IdUsuario = $idUsuario";
		$result = mysql_query($consult, $con) or die ("Error!");
		$fila = mysql_fetch_array($result);
		mysql_close($con);
		if ($fila['IdObjeto'] == $idObjeto) {
			$v = true;
		}
	return ($v);
	}
?>