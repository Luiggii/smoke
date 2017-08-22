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
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos.");
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
	$mysqlInsert = "INSERT INTO micarrodecompras SET IdUsuario=$idUser, Objeto='$objeto', Precio=$precio, Cantidad = $cantidad, IdObjeto = $idObjeto";
	mysqli_query($con, $mysqlInsert) or die ("Hubo un error con la base de datos.");
	mysqli_close($con);
	header("location: tiendaUsuario.php")
?>