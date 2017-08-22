<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenidos a Smoke</title>
		<link href="../css/pagina.css" rel="stylesheet"type="text/css">
		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
	</head>
	<body>
		<div id="principal">
			<?php include "seccionUsuario.php"; ?>
			<div id="columnaizq">
				<ul>	
	   				<li>Smoke brinda un servicio de distribución de software legítimo a todos los usuarios vía internet.</li>
	   				<li>Cada una de sus compras serán registradas y verificadas al momento de la entrega del producto.</li>
					<li>Además puede acceder a cualquiera de nuestras redes sociales para mayor información o alguna sugerencia/duda que tenga respecto a nuestro servicio.</li>
				</ul>
			</div>
			<div id="columnader">
				<div><img class="img" src="../img/x4.png"></img></div>
				<div><img class="img" src="../img/mgsv.png"></img></div>
				<div><img class="img" src="../img/vs2015.png"></img></div>
				<div><img class="img" src="../img/psn.png"></img></div>
				<div><img class="img" src="../img/csgo.jpg"></img></div>
				<img id="borde" class="border"src="../img/slider-bg.png"></img>
			</div>
			<script type="text/javascript">
			$(function(){
				$('#columnader div:gt(0)').hide()
								setInterval(function(){
					$('#columnader div:first-child').fadeOut(1000)
					.next('div').fadeIn(500)
					.end().appendTo('#columnader');
					},3000);
				})
				</script>
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