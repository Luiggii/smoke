<?php
	$Id = $_POST['IdUsuario'];
	$IdObjeto = $_POST['objetoaRetirarID'];
	$Objeto = $_POST['objetoaRetirar'];
	echo $Id;
	echo $IdObjeto;
	echo $Objeto;
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$sql = "DELETE FROM solicitudes WHERE IdObjeto = $IdObjeto and IdUsuario = $Id and Objeto = '$Objeto'";
	mysql_query($sql, $con) or die ("Error!");
	mysql_close($con);
	header("location: solicitudesAdmin.php");
?>