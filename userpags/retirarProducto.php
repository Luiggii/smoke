<?php
	$Id = $_POST['objetoaRetirarID'];
	$objeto = $_POST['objetoaRetirar'];
	$pagina = $_POST['pagina'];
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
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
	mysqli_query($con, $sql) or die ("Hubo un error con la base de datos.");
	mysqli_close($con);
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