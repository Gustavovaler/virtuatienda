$(document).ready(function(){
	$('.input-reg-submit').click(confirmar);
	function  confirmar(){
		console.log('enviando');
	}

	$('#agregarFoto').click(agregarFoto);
	var cantidad_fotos = 0;

	function agregarFoto(){
		if (cantidad_fotos == 0) {
			
			$('.fotoextra1').css({'display':'block'});
			
		}
		if (cantidad_fotos == 1) {
			$('.fotoextra2').css({'display':'block'});
			
		}
		if (cantidad_fotos == 2) {
			$('.fotoextra3').css({'display':'block'});
			
		}
		cantidad_fotos++;
	}




	$('#categoria').mouseout(cargarSubCategoria);

	function cargarSubCategoria(){
		var categoriaSeleccionada = $('#categoria').val();
		

	}

});