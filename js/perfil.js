$(document).ready(function(){
	
		
$('#preguntas-btn').click(function(){
$('#preguntas-content').toggle();
});
$('#compras-btn').click(function(){
$('#compras-content').toggle();
});
$('#ventas-btn').click(function(){
$('#ventas-content').toggle();
});
$('#publicaciones-btn').click(function(){
$('#publicaciones-content').toggle();
});
$('#datos-btn').click(function(){
$('#datos-content').toggle();
});
$('#notificaciones-btn').click(function(){
$('#notificaciones-content').toggle();
});

$('.btn_eliminar').click(function(){
    var publi = $(this).attr('value');
    if(confirm('Desea eliminar esa publicacion de forma permanente?')){
        $(location).attr('href', 'eliminar-publicacion.php?ID='+publi);
    }
});



});


		function guardarRespuesta(str) {
    if (str != "") {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
                } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                xmlhttp.onreadystatechange = function() {
            
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("confirmacion").innerHTML = this.responseText;
               
                        }
                };

                var nueva_respuesta_js = document.getElementById('nueva_respuesta').value;

                if (document.getElementById('nueva_respuesta').value != '') {
                    xmlhttp.open("GET","scripts/guardar_respuesta.php?pregunta_id="+str+"&respuesta="+nueva_respuesta_js,true);
                     xmlhttp.send();
                     location.reload();

                }else{
                   alert('El campo de respuesta no puede estar vacio.');
                   location.reload();
               } } }
