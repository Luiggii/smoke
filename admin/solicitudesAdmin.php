<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Administración</title>
		<link href="../css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<style type="text/css">
		    td{padding: 15px;}
		    .pedidos{border: 1px solid;}
		    p{text-decoration: underline; cursor: pointer;}
		</style>
		<script type='text/javascript'>
			function confirmacion(ID){
				if (document.getElementById('confirmacion'+ID).checked == true) {
					document.getElementById('envio'+ID).disabled = false;
				}
				else{
					document.getElementById('envio'+ID).disabled = true;
				};
			};
			function mensajeVenta(){
				alert("Venta realizada exitósamente!");
			}
		</script>
	</head>
	<body>
		<div id="principal">
			<?php include 'seccionAdmin.php';?>
			<div id="main">
					<p>Solicitudes Pendientes:</p>
				<div id="main1">
					<?php
						$db = "usuarios";
						$host = "localhost";
						$pw = "";
						$user = "root";
						$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
						mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
						$consult = "SELECT NombreUsuario, PrimerNombre, Id FROM information";
						$result = mysql_query($consult, $con) or die ("Error!");
						mysql_close($con);
						$solicitudes = 0;
						while ($fila = mysql_fetch_array($result)) {
							$Id = $fila['Id'];	
							$User = $fila['NombreUsuario'];
							$Nombre = $fila['PrimerNombre'];
							$db = "usuarios";
							$host = "localhost";
							$pw = "";
							$user = "root";
							$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
							mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
							$consult = "SELECT * FROM solicitudes WHERE IdUsuario = $Id";
							$result2 = mysql_query($consult, $con) or die ("Error!");
							mysql_close($con);
							$subTotal = 0.0;
							$total = 0.0;
							echo "<div class='pedidos'>";
								while ($fila2 = mysql_fetch_array($result2)) {
									$IdUnicoObjeto = $fila2['IdObjeto'];
									$objeto = $fila2['Objeto'];
									$cantidad = $fila2['Cantidad'];
									$precio = $fila2['Precio'];
									echo "<table>";
										echo "<tr>";
											echo "<td>".$Id."</td>";
											echo "<td>".$User."</td>";
											echo "<td>".$Nombre."</td>";
											echo "<td>".$objeto." x ".$cantidad."</td>";
											echo "<td>$".($precio * $cantidad)."</td>";
											echo "<form action='retirarProducto.php' id='$IdUnicoObjeto' method='post'>";
												echo "<td>";
													echo "<input type='hidden' name='IdUsuario' value='$Id'>";
													echo "<input type='hidden' name='objetoaRetirarID' value='$IdUnicoObjeto'>";
													echo "<input type='hidden' name='objetoaRetirar' 	value='$objeto'>";
													echo "<input type='submit' value='Retirar solicitud'>";
												echo "</td>";
											echo "</form>";	
										$solicitudes += 1;
										$subTotal += ($precio * $cantidad);
										$total = $subTotal +($subTotal*0.10);
										echo "</tr>";
									echo "</table>";
								}
								if ($total > 0) {
									echo "<br><input type='checkbox' id='confirmacion$Id' onclick='confirmacion($Id)'> Confirmar Pago<br>";
									echo "<form method='post' action='pagoRealizado.php' onsubmit='mensajeVenta()'>";
										echo "<input type='hidden' name='Id' value='$Id'>";
										echo "<input type='hidden' name='User' value='$User'>";
										echo "<input type='hidden' name='Nombre' value='$Nombre'>";
										echo "<input type='hidden' name='IdUnicoObjeto' value='$IdUnicoObjeto'>";
										echo "<input type='hidden' name='Objeto' value='$objeto'>";
										echo "<input type='hidden' name='Precio' value='$precio'>";
										echo "<input type='hidden' name='Cantidad' value='$cantidad'>";
										echo "<input type='submit' value='¡Pago Realizado!' id='envio$Id' disabled>";
									echo "</form>";
									echo "<br>";
									echo "SubTotal: $".$subTotal."<br>";
									echo "Total: $".$total;
								}
							echo "</div>";	
							echo"<br><br><br>";
						}
						if ($solicitudes < 1) {
							echo "<p>¡No tiene solicitudes pendientes!</p>";
						}
					?>
				</div>
			</div>

			<div class="clear"></div>
			<div id ="ppie">
				<aside>		
				 	
				</aside>
			</div>
		</div>
	</body>
</html>