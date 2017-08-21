function mensajeAlerta(){
	alert("Producto agregado al carrito de compras!");
}
window.addEventListener('load', function(){
	[].forEach.call(document.querySelectorAll('.plusCarro'),function(element){
		var ID = element.id;
		element.addEventListener('click', function(){
			if (Number(document.getElementById('cantidad'+ID).value) >= Number(document.getElementById('disponibles'+ID).value)) {
				document.getElementById('cantidad'+ID).value = 1;
			}
			else{
				document.getElementById('cantidad'+ID).value = Number(document.getElementById('cantidad'+ID).value) + 1;
			};
		});
    });
	[].forEach.call(document.querySelectorAll('.minusCarro'),function(element){
		var ID = element.id;
		element.addEventListener('click', function(){
			document.getElementById('cantidad'+ID).value = 1;	
		});
	});
});