window.addEventListener('load',function(){
	document.getElementById('botonBorrar').addEventListener('click',borrarDatos);
	function borrarDatos(){
		[].forEach.call(document.querySelectorAll('.inputext'),function(element){
			element.value = ""
		})
	};
})

function validacion(){
		var valid = true;
		var nick = document.getElementById('createUser').value;
		document.getElementById('createUserError').innerHTML = "<div id='createUserError'></div>";
		document.getElementById('createNameError').innerHTML = "<div id='createNameError'></div>";
		document.getElementById('createMailError').innerHTML = "<div id='createMailError'></div>";
		document.getElementById('createPassError').innerHTML = "<div id='createPassError'></div>";
		if (document.getElementById('createUser').value.length < 6){
			document.getElementById('createUserError').innerHTML = "<p id='createUserError'><font color='#00FFC0'>*Su nombre de usuario debe contener al menos 6 caracteres*</font></p>";
			valid = false;
		}
		else{
			//validación de nombres de usuario
			$.post('validacionUser.php', {nick: nick}, function(data){
				if (data != 1) {
					document.getElementById('createUserError').innerHTML = "<p id='createUserError'><font color='#00FFC0'>*Éste nombre de usuario ya existe!*</font></p>";
					valid = false;
				};	
			});	
		};
		if (document.getElementById('createName').value.length < 5){
			document.getElementById('createNameError').innerHTML = "<p id='createNameError'><font color='#00FFC0'>*Su nombre debe contener al menos 5 caracteres*</font></p>";
			valid = false;
		};	
		if (document.getElementById('createMail').value == ""){
			document.getElementById('createMailError').innerHTML = "<p id='createMailError'><font color='#00FFC0'>*Este campo es obligatorio*</font></p>";
			valid = false;
		}
		if (document.getElementById('createPass').value.length < 8){
			document.getElementById('createPassError').innerHTML = "<p id='createPassError'><font color='#00FFC0'>*Su clave debe contener al menos 8 caracteres*</font></p>";
			valid = false;
		}
		if (valid == true) {
			alert("Datos guardados correctamente!");
		}		
		return valid;
	};