<?php
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
	session_start();
	if (!$_SESSION) {
		header("location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1><a href="indexUsuario.php"><img src="../img/smoketittle.jpg" style="width:250px;height:100px;"></img></a></h1>
		<div id="iniciosesion">
	 		   <div id="centro1">
	  			 	<ul>	
	    				<a class"menu" href="tiendaUsuario.php">Tienda</a>
	    				<a class"menu" href="../userpags/trailersUsuario.php">Trailers</a>
						<a class"menu" href="../userpags/faqUsuario.php">FAQ</a>
						<a class"menu" href="micarritodeCompras.php">Carrito de compras</a>
	   				</ul>
	   			<p>
	    			<a>Bienvenido</a> 
	    			<a href="micarritodeCompras.php"><?php echo $_SESSION['nombreDeUsuario'];?></a><br>
					<a href="CerrarSesion.php">Cerrar Sesion</a>
				<p>

					</div>
		</div>
	</body>
<html>