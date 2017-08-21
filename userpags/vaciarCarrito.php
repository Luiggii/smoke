<?php
	$Id = $_POST['IdUsuario'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$sql = "DELETE FROM micarrodecompras WHERE IdUsuario = $Id";
	mysql_query($sql, $con) or die ("Hubo un error con la base de datos.");
	mysql_close($con);
	header("location: micarritodeCompras.php");
?>