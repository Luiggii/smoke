function validacionLog(){
	var valid = true;
	var usuer = document.getElementById('nombreusuario').value;
	var pass = document.getElementById('passusuario').value;
	$.post('validacionLogin.php', {Usuer: usuer, Pass: pass}, function(data){
		if (data != 1) {	
			alert (data);
			document.getElementById('loginError').innerHTML = "Combinación de nombre de usuario y contraseña incorrectos!";
			valid = false;
		};
	});
	return valid;
};