<?php
include('../global/conexion2.php');
include('mail_pregunta.php');


if(isset($_GET['usuario'])){  //id del que hace la pregunta

	$vendedor = $_GET['vendedor'];
	$pregunta = $_GET['mensaje']; //texto de la pregunta
	$publicacion = $_GET['publicacion'];//id de publicacion
	$usuario = $_GET['usuario'];// id del que hace la pregunta

	$sql_vendedor = "SELECT ID_vendedor FROM vt_publicaciones WHERE ID='$publicacion'";

	$resultado_vendedor = mysqli_query($conn,$sql_vendedor);
	foreach ($resultado_vendedor as $keyvend) {
		$vendedor = $keyvend['ID_vendedor'];
	}

	$sql = "INSERT INTO vt_preguntas (pregunta,publicacion,usuario,vendedor) VALUES ('$pregunta','$publicacion','$usuario','$vendedor')";	

	if (mysqli_query($conn,$sql)) {
		echo "Tu pregunta ya fue Enviada !!";
		
		
	}else{
		echo "Ups... ! Hubo un error. Intenta mas tarde.";
	}


}
enviarMailPreguntaData($vendedor,$publicacion,$conn);



	//logueado con el 13

    
	
?>