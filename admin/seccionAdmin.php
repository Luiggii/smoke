<?php
	session_start();
	if (!$_SESSION) {
		header("location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
	<body>
		<div id="iniciosesion">
			<div id="menu">
	    		<a>Bienvenido</a> 
	    		<?php echo $_SESSION['nombreDeUsuario'];?><br>
				<a href="CerrarSesion.php">Terminar</a>
	    		<a href="solicitudesAdmin.php" class="nidea">Solicitudes</a>
			</div>
		</div>
		<div id="cabecera">
			<h1>Administración</h1>
		</div>
	</body>
<html>