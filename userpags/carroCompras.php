<?php
	$idUser = $_POST['IdUsuario'];
	$idObjeto = $_POST['IdObjeto'];
	$objeto = $_POST['NombreProducto'];
	$precio = $_POST['PrecioProducto'];
	$disponibles = $_POST['Disponibles'];
	$cantidad = $_POST['CantidadCarrito'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos.");
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	$mysqlInsert = "INSERT INTO micarrodecompras SET IdUsuario=$idUser, Objeto='$objeto', Precio=$precio, Cantidad = $cantidad, IdObjeto = $idObjeto";
	mysql_query($mysqlInsert, $con) or die ("Hubo un error con la base de datos.");
	mysql_close($con);
	header("location: tiendaUsuario.php")
?>