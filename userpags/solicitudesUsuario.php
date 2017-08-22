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
		    table, tr{border: 1px solid; padding: 10px;}
		    .objeto{padding-right: 15px;border-right:1px solid;}
		    .retirar{float: right;border-left: 1px solid;padding-left: 15px;}
		    .precio{padding-right: 15px; padding-left: 15px;}
		    p{text-decoration: underline; cursor: pointer;}
		</style>
		<script type='text/javascript'>
			function RetirarDelCarro(ID){
				document.getElementById(ID).submit();
			}
			function Mensaje(){
				alert("Gracias por su compra! Cuando hallamos confirmado su pago, le enviaremos sus códigos al correo registrado.");
			}
		</script>
	</head>
	<body>
		<div id="principal">
			<?php include "seccionUsuario.php"; ?>
			<div id="main">
				<div id="main1">
					<?php
						$idUsuario = $_SESSION['idUsuario'];
						$db = "usuarios";
						$host = "localhost";
						$pw = "";
						$user = "root";
						$con = mysqli_connect($host, $user, $pw) or die ("No se puede conectar con la base de datos."); 
						mysqli_select_db($con, $db) or die ("No se puede conectar con la base de datos.");
						$consult = "SELECT * FROM solicitudes WHERE IdUsuario = $idUsuario";
						$result = mysqli_query($con, $consult) or die ("Error!");
						$subTotal = 0.0;
						$total = 0.0;
						$cantidad = 0;
						$pagina = "solicitudes";
						while ($fila = mysqli_fetch_array($result)) {
							$IdUsuario = $fila['IdUsuario'];
							$IdUnicoObjeto = $fila['Id'];
							$objeto = $fila['Objeto'];
							echo "<table>";
								echo "<tr>";
									echo "<td class='objeto'>".$fila['Objeto']."</td>";
									echo "<td class='precio'>$".$fila['Precio']."</td><br>";
									echo "<form action='retirarProducto.php' id='$IdUnicoObjeto' method='post'>";
										echo "<input type='hidden' name='objetoaRetirarID' value='$IdUnicoObjeto'>";
										echo "<input type='hidden' name='objetoaRetirar' value='$objeto'>";
										echo "<input type='hidden' name='pagina' value='$pagina'>";
										echo "<td class='retirar'><p onclick='RetirarDelCarro($IdUnicoObjeto)' onmouseover=''>Cancelar solicitud</p></td>";
									echo "</form>";	
									$cantidad += 1;
									$subTotal += $fila['Precio'];
									$total = $subTotal +($subTotal*0.10);
								echo "</tr>";
							echo "</table>";
						}
						if ($cantidad < 1) {
							echo "<p>No tiene solicitudes pendientes</p>";
						}
						else{
							echo "<br>";
							echo "SubTotal: $".$subTotal."<br><br>";
							echo "Total: $".$total;
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