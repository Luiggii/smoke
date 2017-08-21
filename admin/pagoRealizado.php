<?php
	$id = $_POST['Id'];
	$usr = $_POST['User'];
	$nombre = $_POST['Nombre'];
	$fecha = date("Y/m/d");
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$consult = "SELECT * FROM solicitudes WHERE IdUsuario = $id";
	$result = mysql_query($consult, $con) or die ("Hubo un error con la base de datos.");
	mysql_close($con);
	while ($fila = mysql_fetch_array($result)) {
		$idUnicoObjeto = $fila['IdObjeto'];
		$objeto = $fila['Objeto'];
		$precio = $fila['Precio'];
		$cantidad = $fila['Cantidad'];
		$db = "carrodecompras";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
		$sql = "INSERT INTO ventas SET IdUsuario = $id, NombreUsuario = '$usr',PrimerNombre = '$nombre', IdProducto = $idUnicoObjeto, Producto = '$objeto',Fecha= '$fecha', Precio = $precio, Cantidad = $cantidad";
		mysql_query($sql, $con) or die ("Hubo un error con la base de datos.");
		$sql = "UPDATE productos SET Cantidad = (Cantidad - $cantidad) WHERE Id = $idUnicoObjeto and Nombre = '$objeto'";
		mysql_query($sql, $con) or die ("Hubo un error con la base de datos.");
		mysql_close($con);

		$db = "usuarios";
		$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
		$sql = "DELETE FROM solicitudes WHERE IdObjeto = $idUnicoObjeto and IdUsuario = $id and Objeto = '$objeto'";
		mysql_query($sql, $con) or die ("Error!");
		mysql_close($con);
	}	
	header("location: solicitudesAdmin.php");
?>