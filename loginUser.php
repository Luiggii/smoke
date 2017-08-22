<?php
	$usuario = $_POST['Nombreusuario'];
	$password = $_POST['Passusuario'];
	if (isset($usuario)) {
		$db = "usuarios";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
		session_start();
		$consult = "SELECT * FROM information WHERE NombreUsuario = '$usuario' AND Password = '$password'";
		$result = mysqli_query($con, $consult) or die ("Error!");
		$fila = mysqli_fetch_array($result);
		if ($usuario == "admin" & $password == $pw) {
			$_SESSION['nombreDeUsuario'] = $usuario;
			header("location: admin/solicitudesAdmin.php");
		}
		else{ 
			if (!$fila['Id']) {
				//echo "Combinación de usuario y contraseña incorrectos!";
				header("location: index.php");
			}
			else{
				$_SESSION['nombreDeUsuario'] = $fila['NombreUsuario'];
				$_SESSION['idUsuario'] = $fila['Id'];
				header("Location: userpags/indexUsuario.php");
			}
		}	
	}
	else{
		header ("location: index.php");
	}
	//echo "<script type='text/javascript'>alert('')</script>";
?>