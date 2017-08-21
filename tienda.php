<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a Smoke</title>
		<link href="css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<style type="text/css">
			.seccionProductos{
				display: inline-block;
				padding: 10px;
			}
		    .imgproduct{
		    	width: 365px;
		    	height: 260px;
		    }
		    .productos{
		    	border: 1px solid black;
		    }
		    .seccionProductos{
		    	text-align: center;
		    }
		</style>
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
			<div id="main">
				<div id="main1">
					<?php
						$db = "carrodecompras";
						$host = "localhost";
						$pw = "";
						$user = "root";
						$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
						mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
						$consult = "SELECT Id FROM productos";
						$result = mysql_query($consult, $con) or die ("Error!");
						$numeroDeProductos = mysql_num_rows($result);
						for ($i=1; $i <= $numeroDeProductos; $i++) { 
							$consult = "SELECT * FROM productos WHERE Id = $i";
							$result = mysql_query($consult, $con) or die ("Error!");
							$fila = mysql_fetch_array($result);
							$imagenProducto = $fila['Imagen'];
							$idProducto = $fila['Id'];
							$nombreProducto = $fila['Nombre'];
							$descriptProducto = $fila['Descripcion'];
							$precioProducto = $fila['Precio'];
							$cantidadProducto = $fila['Cantidad'];
							echo "<div class='seccionProductos'>";
								echo "<table class='productos'>";
									echo "<tr>";
										echo "<th><img class='imgproduct' src='img/$imagenProducto'></th>";
									echo "</tr>";
									echo "<tr>";
										echo "<th>$nombreProducto</th>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>Descripción: $descriptProducto</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>Precio: $$precioProducto</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>Cantidad: $cantidadProducto</td>";
									echo "</tr>";
									if ($cantidadProducto <= 0) {
										echo "<tr>";
											echo "<td><input type='button' value='Añadir al carrito' disabled></td>";
										echo "<tr>";
									}
									else{
										echo "<tr>";
											echo "<td><a href='index.php'><input type='button' value='Añadir al carrito'></td></a>";
										echo "</tr>";
									}
								echo "</table>";
							echo "</div>";
						}	
					?>
					</div>
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
	</body>
</html>