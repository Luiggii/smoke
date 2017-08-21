<?php
	$Id = $_POST['objetoaRetirarID'];
	$objeto = $_POST['objetoaRetirar'];
	$pagina = $_POST['pagina'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	switch ($pagina) {
		case 'carro':
			$sql = "DELETE FROM micarrodecompras WHERE Id = '$Id' and Objeto = '$objeto'";
		break;
		case 'solicitudes':
			$sql = "DELETE FROM solicitudes WHERE Id = '$Id' and Objeto = '$objeto'";
		break;
		default:
			header("indexUsuario.php");
		break;
	}
	mysql_query($sql, $con) or die ("Hubo un error con la base de datos.");
	mysql_close($con);
	switch ($pagina) {
		case 'carro':
			header("location: micarritodeCompras.php");
		break;
		case 'solicitudes':
			header("location: solicitudesUsuario.php");
		break;
		default:
			header("indexUsuario.php");
		break;
	}
	
?>