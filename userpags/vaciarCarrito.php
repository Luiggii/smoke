<?php
	$Id = $_POST['IdUsuario'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
	$sql = "DELETE FROM micarrodecompras WHERE IdUsuario = $Id";
	mysqli_query($con, $sql) or die ("Hubo un error con la base de datos.");
	mysqli_close($con);
	header("location: micarritodeCompras.php");
?>