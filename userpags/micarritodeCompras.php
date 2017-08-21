<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a Smoke</title>
		<link href="../css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<style type="text/css">
			.seccionProductos{display: inline-block;}
		    .imgproduct{width: 250px;height: 200px;}
		    .objeto{padding-right: 15px;border-right :1px solid;}
		    .retirar{float: right;border-left: 1px solid;padding-left: 15px;}
		    .precio{padding-right: 15px; padding-left: 15px;}
		    a, p{text-decoration: underline; cursor: pointer;}
		    tr, td{padding: 10px;border: 1px solid black;}
		</style>
		<script type='text/javascript'>
			function RetirarDelCarro(ID){
				document.getElementById(ID).submit();
			}
			function Mensaje(){
				alert("Gracias por su compra! Cuando hallamos confirmado su pago, le enviaremos sus códigos al correo registrado.");
			}
			window.addEventListener('load', function(){
				document.getElementById('confirmacion').addEventListener('change', function(){
					if (this.checked == true) {
						document.getElementById('enviarDatos').disabled = false;
					}
					else{
						document.getElementById('enviarDatos').disabled = true;
					};
				});
			});
		</script>
	</head>
	<body>
		<div id="principal">
			<?php include "seccionUsuario.php"; ?>
			<div id="main">
				<p>Carrito de compras:</p>
				<div id="main1">
					<?php
						$idUsuario = $_SESSION['idUsuario'];
						$pagina = "carro";
						$db = "usuarios";
						$host = "localhost";
						$pw = "";
						$user = "root";
						$con = mysql_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
						mysql_select_db($db, $con) or die ("No se puede conectar con la base de datos.");
						$consult = "SELECT * FROM micarrodecompras WHERE IdUsuario = $idUsuario";
						$result = mysql_query($consult, $con) or die ("Error!");
						$subTotal = 0.0;
						$total = 0.0;
						$cantidad = 0;
						while ($fila = mysql_fetch_array($result)) {
							$IdUsuario = $fila['IdUsuario'];
							$IdUnicoObjeto = $fila['Id'];
							$objeto = $fila['Objeto'];
							$comprados = $fila['Cantidad'];
							$precio = $fila['Precio'];
							echo "<div id='tabla'>";
							echo "<table>";
								echo "<tr>";
									echo "<td class='objeto'>".$objeto." x ".$comprados."</td>";
									echo "<td class='precio'>$".($precio*$comprados)."</td><br>";
									echo "<form action='retirarProducto.php' id='$IdUnicoObjeto' method='post'>";
										echo "<input type='hidden' name='objetoaRetirarID' value='$IdUnicoObjeto'>";
										echo "<input type='hidden' name='objetoaRetirar' value='$objeto'>";
										echo "<input type='hidden' name='pagina' value='$pagina'>";
										echo "<td class='retirar'><p onclick='RetirarDelCarro($IdUnicoObjeto)' onmouseover=''>Retirar del carro</p></td>";
									echo "</form>";	
									$cantidad += 1;
									$subTotal += $precio*$comprados;
									$total = $subTotal +($subTotal*0.10);
								echo "</tr>";
							echo "</table>";
							echo "</div>";
						}
						if ($cantidad < 1) {
							echo "<a href='tiendaUsuario.php'>Su carro de compras está vacío</a>";
						}
						else{
							echo "<form action='vaciarCarrito.php' method='post'>";
							echo "<input type='hidden' name='IdUsuario' value='$idUsuario'>";
							echo "<input type='submit' value='Vaciar carrito'>";
							echo "</form>";						
							echo "<br><br>";
							echo "SubTotal: $".$subTotal."<br>";
							echo "Total: $".$total;
							echo "<br><br>";
							echo "<input type='checkbox' name='Confirmacion' id='confirmacion' value='true'> Confirmar Compra<br><br>";				
							echo "<form method='post' action='solicitudProducto.php' onsubmit='Mensaje()'>"; 
								echo "<input type='hidden' name='IdUnico' value=$IdUsuario>";
								echo "<input type='submit' class='buttons' id='enviarDatos' value='Solicitar Productos' disabled>";
							echo "</form>";
						}
						echo "<form action='solicitudesUsuario.php'>";		
							echo "<input type='submit' class='buttons' value='Verificar solicitudes'>";
						echo "</form>";
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