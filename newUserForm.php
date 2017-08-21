<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a Smoke</title>
		<link href="css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="js/newUserFormScript.js"></script>
	</head>
	<body>
		<div id="principal">
			<?php include "LoginSection.php"; ?>
			<div id="columnaizq">
				<ul>	
	   				<li>Smoke brinda un servicio de distribución de software legítimo a todos los usuarios vía internet.</li>
	   				<li>Cada una de sus compras serán registradas y verificadas al momento de la entrega del producto.</li>
					<li>Además puede acceder a cualquiera de nuestras redes sociales para mayor información o alguna sugerencia/duda que tenga respecto a nuestro servicio.</li>
				</ul>
			</div>
			<div id="columnader">
				<form action="DBUsers.php" method="post" onsubmit="return validacion()">
					<label for="createUser">Nombre de Usuario:</label>
					<input id="createUser" type="text" value="" name="CreateUser" class="inputext">
					<div id="createUserError"></div><br>
					<label for="createName">Primer Nombre:</label>
					<input id="createName" type="text" value="" name="CreateName" class="inputext">
					<div id="createNameError"></div><br>
					<label for="createMail">Correo:</label>
					<input id="createMail" type="text" value="" name="CreateMail" class="inputext">
					<div id="createMailError"></div><br>
					<label for="createPass">Contraseña:</label>
					<input id="createPass" type="password" value="" name="CreatePass" class="inputext">
					<div id="createPassError"></div><br>
					<input type="submit" value="Enviar datos" class="buttons" id="submitbutton">
					<input type="button" value="Borrar Datos" id="botonBorrar" class="buttons">
				</form>
			</div>
			
			<div class="clear"></div>
			<div id ="ppie">
				<aside>		
				 	<br>
				 		<p>Ingeniería de Software II 5to Nivel A.
				 	<br>
				 	Bailón Intriago, Prado Luiggi</p>
				</aside>
			</div>
		</div>
	</body>
</html>