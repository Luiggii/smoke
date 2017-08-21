<script type='text/javascript' src='js/ScriptIndex.js'></script>
<h1><a href="index.php"><img src="img/smoketittle.jpg" style="width:250px;height:100px;"></img></a></h1>
<div id="iniciosesion">
	<form id="formu" method="post" action="loginUser.php" onsubmit="return validacionLog()">
	    <label class="textup"for="nombreusuario">Usuario</label> 
	    <input type="text" id="nombreusuario" value="" name="Nombreusuario" class="usuarioc">
	    <label class="textup" for="passusuario">Password</label>
	    <input type="password" id="passusuario" value="" name="Passusuario" class="passc">
	    <input type="submit" class="buttons" value="Entrar"><br>  
	    <div id="loginError">
	    </div>	
	    <div id="loginError"></div>	
	    <p>¿Eres nuevo/a?<a id="regis" href="newUserForm.php">Regístrate</a></p>
	</form>
		<div id="centro">
	    	<ul>	
	    		<a class"menu" href="tienda.php">Tienda</a>
	    		<a class"menu" href="trailers.php">Trailers</a>
				<a class"menu" href="faq.php">FAQ</a>
	   		</ul>
	   </div>
</div>

