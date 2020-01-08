<?php
include('../global/conexion2.php');
include('mail_pregunta.php');
include('enviar_mail.php');

$respuesta = $_GET['respuesta'];
$pregunta = $_GET['pregunta_id'];

$sql_respuesta = "UPDATE `vt_preguntas` SET `respuesta` = '$respuesta', contestada =1 WHERE ID_pregunta ='$pregunta'"; //113

if (mysqli_query($conn,$sql_respuesta)) {
	$sql_preguntarespondida =  "SELECT usuario,publicacion FROM vt_preguntas WHERE ID_pregunta='$pregunta'";

	$res = mysqli_query($conn,$sql_preguntarespondida);
	foreach ($res as $key) {
		$usuario = $key['usuario'];//24
		$publicacion_id = $key['publicacion'];
	}



	$sql_usuario_destino = "SELECT * FROM vt_usuarios WHERE id_vendedor='$usuario'";
	$destinatario_respuesta = mysqli_query($conn,$sql_usuario_destino);


	foreach ($destinatario_respuesta as $row) {
		$destinatario_mail = $row['email'];
		$destinatario_usuario = $row['usuario'];
	}
	$sql_publi = "SELECT titulo FROM vt_publicaciones WHERE ID='$publicacion_id'";
	$res_publi = mysqli_query($conn,$sql_publi);
	foreach ($res_publi as $publ) {
		$titulo = $publ['titulo'];
 	}

	enviarMail("info@virtuatienda.com",$destinatario_mail,$titulo,"alt","../mails_templates/mail_respondido.html","Virtuatienda-Mensajeria",$destinatario_usuario);

}



?>
