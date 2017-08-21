<?php
	$db = "usuarios";
	$host = "localhost";
	$pw = "";
	$user = "root";
	$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
	mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
	session_start();
	session_destroy();
	header("location: ../index.php");
?>