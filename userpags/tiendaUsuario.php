<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a Smoke</title>
		<link href="../css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../js/ScriptTienda.js"></script>
		<style type="text/css">
			.seccionProductos{display: inline-block;padding: 10px;}
		    .imgproduct{width: 365px;height: 260px;}
		    .productos{border: 1px solid black;}
		    .seccionProductos{text-align: center;}
		</style>
	</head>
	<body>
		<div id="principal">
			<?php include "seccionUsuario.php"; ?>
			<?php include "validacionCarro.php"; ?>
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
						$idUsuario = $_SESSION['idUsuario'];
						$db = "carrodecompras";
						$host = "localhost";
						$pw = "";
						$user = "root";
						$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
						mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
						$consult = "SELECT * FROM productos";
						$result = mysqli_query($con, $consult) or die ("Error!");
						mysqli_close($con);
						while ($fila = mysqli_fetch_array($result)) {
							$imagenProducto = $fila['Imagen'];
							$idProducto = $fila['Id'];
							$nombreProducto = $fila['Nombre'];
							$descriptProducto = $fila['Descripcion'];
							$precioProducto = $fila['Precio'];
							$cantidadProducto = $fila['Cantidad'];
							echo "<div class='seccionProductos'>";
								echo "<table class='productos'>";
									echo "<tr>";
										echo "<th><img class='imgproduct' src='../img/$imagenProducto'></th>";
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
										echo "<td>Disponibles: $cantidadProducto</td>";
									echo "</tr>";
									if ($cantidadProducto <= 0) {
										echo "<tr>"; 
											echo "<td><input type='text' name='cantidadCarrito' value='0' disabled size='1'></td>";
										echo "</tr>";
										echo "<tr>";
											echo "<td><input type='button' value='Agotado' disabled></td>";
										echo "<tr>";
									}
									else if($cantidadProducto > 0){
										if (validacion($idProducto, $idUsuario) == 1){
											echo "<tr>"; 
												echo "<td><input type='text' name='cantidadCarrito' value='0' disabled size='1'></td>";
											echo "</tr>";
											echo "<tr>";
												echo "<td><input type='button' value='En tu carrito de compras' disabled></td>";
											echo "<tr>";
										}
										else{
											echo "<tr>";
												echo "<form method='post' action='carroCompras.php' onsubmit='mensajeAlerta()'>";
													echo "<input type='hidden' name='IdUsuario' value='$idUsuario'>";
													echo "<input type='hidden' name='NombreProducto' value='$nombreProducto'>";
													echo "<input type='hidden' name='PrecioProducto' value='$precioProducto'>";
													echo "<input type='hidden' name='Disponibles' value='$cantidadProducto' id='disponibles$idProducto'>";
													echo "<input type='hidden' name='IdObjeto' value='$idProducto'>";
													echo "<td><input type='text' name='CantidadCarrito' value='1' id='cantidad$idProducto' class='cantidades' size='1'></td>";
											echo "</tr>";
											echo "<tr>";
												echo "<td>";
													echo "<input type='button' value='Unidad' class='minusCarro' id='$idProducto' formnovalidate>";
													echo "<input type='submit' value='Añadir al carrito' class='buttons'>";
													echo "<input type='button' value='+1' class='plusCarro' id='$idProducto' formnovalidate>";
												echo "</td>";
												echo "</form>";
											echo "</tr>";
										}
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
				 		<p>Ingeniería de Software II
				 	<br>
				 	Bailón Cristhian, Prado Luiggi</p>
				</aside>
			</div>
		</div>
	</body>
</html>