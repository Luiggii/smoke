<?php
	$IdUsuario = $_POST['IdUnico'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
	$consult = "SELECT * FROM micarrodecompras where IdUsuario = $IdUsuario";
	$result = mysqli_query($con, $consult) or die ("Error!");
	while ($fila = mysqli_fetch_array($result)) {
		$Id = $fila['IdUsuario'];
		$IdObjeto = $fila['IdObjeto'];
		$objeto = $fila['Objeto'];
		$precio = $fila['Precio'];
		$cantidad = $fila['Cantidad'];
		$mysqlInsert = "INSERT INTO solicitudes SET IdUsuario = $Id, Objeto = '$objeto' , Precio = $precio, Cantidad = $cantidad, IdObjeto = $IdObjeto";
		mysqli_query($con, $mysqlInsert)or die ("Hubo un error con la base de datos.");
	}
	mysqli_close($con);
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
	$sql = "DELETE FROM micarrodecompras WHERE IdUsuario = $Id";
	mysqli_query($con, $sql) or die ("Hubo un error con la base de datos.");
	mysqli_close($con);
	header ("location: solicitudesUsuario.php");
?>