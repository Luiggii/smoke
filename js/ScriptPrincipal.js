window.addEventListener('load',function(){
//Control de botones desplegables
	[].forEach.call(document.querySelectorAll('.dropdownmenu'),function(element){
		element.addEventListener('mouseover',function(){
			document.getElementById('menu'+element.id).style.display = "initial";
		})
		element.addEventListener('mouseout',function(){
			document.getElementById('menu'+element.id).style.display = "none";
		})
	});

//Control del slider
	var posicion = 1;
	document.querySelector('#img'+posicion).style.display = "initial";
	document.querySelector('#botonNext').addEventListener('click',function(){
		document.querySelector('#img'+posicion).style.display = "none";
		posicion++;
		if (posicion > document.querySelectorAll('.sliderImg').length){
			posicion = 1;
		}
		document.querySelector('#img'+posicion).style.display = "initial";
	});
	document.querySelector('#botonRetro').addEventListener('click',function(){
		document.querySelector('#img'+posicion).style.display = "none";
		posicion--;
		if (posicion < 1){
			posicion = document.querySelectorAll('.sliderImg').length;
		}
		document.querySelector('#img'+posicion).style.display = "initial";
	});
});