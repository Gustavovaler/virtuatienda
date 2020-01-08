$(document).ready(function(){

	$('.miniatura').mouseover(cambiaFoto);

	function cambiaFoto(){
		var current = $(this).attr('src');
		if (current != 'imagenes/blanco.jpg') {
			$('#imagen-central').attr('src',current);
		}	
	}	
});


