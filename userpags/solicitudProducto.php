<?php
	$IdUsuario = $_POST['IdUnico'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$consult = "SELECT * FROM micarrodecompras where IdUsuario = $IdUsuario";
	$result = mysql_query($consult, $con) or die ("Error!");
	while ($fila = mysql_fetch_array($result)) {
		$Id = $fila['IdUsuario'];
		$IdObjeto = $fila['IdObjeto'];
		$objeto = $fila['Objeto'];
		$precio = $fila['Precio'];
		$cantidad = $fila['Cantidad'];
		$mysqlInsert = "INSERT INTO solicitudes SET IdUsuario = $Id, Objeto = '$objeto' , Precio = $precio, Cantidad = $cantidad, IdObjeto = $IdObjeto";
		mysql_query($mysqlInsert, $con)or die ("Hubo un error con la base de datos.");
	}
	mysql_close($con);
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$sql = "DELETE FROM micarrodecompras WHERE IdUsuario = $Id";
	mysql_query($sql, $con) or die ("Hubo un error con la base de datos.");
	mysql_close($con);
	header ("location: solicitudesUsuario.php");
?>