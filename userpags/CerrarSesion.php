<?php
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysqli_select_db($con,$db) or die ("No se puede conectar con la base de datos.");
	session_start();
	session_destroy();
	header("location: ../index.php");
?>