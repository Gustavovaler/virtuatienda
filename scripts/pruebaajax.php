<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>


	<script>
		$(document).ready(function(){
			function preguntaGuardada(){

			}



		});
		function mostrarRespuesta(str) {
    if (str == "") {
        document.getElementById("cuadrodetexto").innerHTML = "hola";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cuadrodetexto").innerHTML = this.responseText;
               
            }
        };
        xmlhttp.open("GET","ask_reader.php?"+str,true);
        xmlhttp.send();


    }
}

	</script>

	<select name="" id="" onchange="mostrarRespuesta('publicacion='+this.value)">
		<option value="64">12</option>
		<option value="65">13</option>
		<option value="69">24</option>
	</select>



<div id="cuadrodetexto">
	
</div>
<div class="mensaje">
	
</div>
</body>
</html>