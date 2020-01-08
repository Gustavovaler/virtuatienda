<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

if (isset( $_POST['remitente'])) {
	$remitente = $_POST['remitente'];
}else{
	$remitente = 'info@virtuatienda.com';
}
if (isset( $_POST['destinatario'])) {
	$destino = $_POST['destinatario'];
}else{
	$destino = ' ';
}
if (isset( $_POST['asunto'])) {
	$asunto = $_POST['asunto'];
}else{
	$asunto = 'Sin asunto';
}
if (isset( $_POST['mensaje_alt'])) {
	$mensaje_alt = $_POST['mensaje_alt'];
}else{
	$mensaje_alt = 'Este es un mensaje de texto.';
}
if (isset( $_POST['mensaje_html'])) {
	$mensaje_html = $_POST['mensaje_html'];
}else{
	$mensaje_html = '../mails_templates/mail_default.html';
}
if (isset( $_POST['nombre_fantasia_remitente'])) {
	$nombre_fantasia_remitente = $_POST['nombre_fantasia_remitente'];
}else{
	$nombre_fantasia_remitente = 'Virtuatienda.com';
}
if (isset( $_POST['nombre_usuario_destino'])) {
	$nombre_usuario_destino = $_POST['nombre_usuario_destino'];
}else{
	$nombre_usuario_destino = 'Sr. Usuario';
}

// este script debe recibir :
//			remitente
//          destinatario
//          asunto

function enviarMail($remitente,$destino,$asunto,$mensaje_alt,$mensaje_html,$nombre_fantasia_remitente,$nombre_usuario_destino){

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.hostinger.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;

	$mail->Username = 'info@virtuatienda.com';  //cuenta de correo remitente
	$mail->Password = 'tPz6rHGrCw4t';           // password de la cuenta

	$mail->setFrom($remitente , $nombre_fantasia_remitente);
	$mail->addReplyTo($remitente , 'Virtuatieda - informacion');
	$mail->addAddress($destino, $nombre_usuario_destino);
	$mail->Subject = $asunto;				
	$mail->msgHTML(file_get_contents($mensaje_html), __DIR__);
	//$mail->Body = $mensa;
	//$mail->addAttachment('../archivos/logo-virtuatienda-mail.png');
	$mail->AltBody = $mensaje_alt;

	if ($mail->send()) {
		echo "enviado";

	}else{
		return  'Mailer Error: ' . $mail->ErrorInfo;
	}
	

}

//enviarMail("info@virtuatienda.com","gustavodevaler@gmail.com","Moto Yamaha 125 cc 20mil km como nueva !!", "alt", "../mails_templates/mail_respondido.html","Virtuatienda-Preguntas","Gustavovaler");



?>