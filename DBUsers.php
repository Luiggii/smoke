<?php
	if ( !empty($_POST['CreateUser']) && !empty($_POST['CreateName']) && !empty($_POST['CreateMail']) && !empty($_POST['CreatePass'])){
		$nombreUsuarioRegistrado = $_POST['CreateUser'];
		$nombrePrimerRegistrado = $_POST['CreateName'];
		$mailRegistrado = $_POST['CreateMail'];
		$passwordRegistrado = $_POST['CreatePass'];	
		$db = "usuarios";
		$host = "localhost";
		$pw = "";
		$user = "root";
		$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
		mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
		$mysqlInsert = "INSERT INTO information SET NombreUsuario = '$nombreUsuarioRegistrado', PrimerNombre = '$nombrePrimerRegistrado', Correo = '$mailRegistrado', Password = '$passwordRegistrado'";
		mysql_query($mysqlInsert, $con) or die ("Hubo un error con la base de datos.");
		//echo "Datos guardados correctamente <br>";
		//echo "<a href='index.php'>Regresar al menú principal</a>";
		header ("location: index.php");
	}
	else{
		header ("location: index.php");
	}
?>