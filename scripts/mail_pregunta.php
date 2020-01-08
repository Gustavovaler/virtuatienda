<?php

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';




function enviarMailPreguntaData($usuario,$publicacion,$conexion){//24  122
		$sql_user = "SELECT email,usuario FROM vt_usuarios WHERE  id_vendedor='$usuario'";
		$sql_articulo = "SELECT titulo FROM vt_publicaciones WHERE ID='$publicacion'";

		$user_data = mysqli_query($conexion,$sql_user);

		foreach ($user_data  as $row) {
			$mail_to= $row['email'];
			
			$usuario_nick = $row['usuario'];
			
		}
		$titulo_pub = mysqli_query($conexion, $sql_articulo);

		foreach ($titulo_pub as $key) {
			
			$titulo = $key['titulo'];

		}

		enviarMailPregunta($mail_to,$titulo,$usuario_nick);
		
	}


	function enviarMailPregunta($mail_to,$mensaje, $nombre_usuario){

		$remitente = 'info@virtuatienda.com';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.hostinger.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = 'info@virtuatienda.com';
		$mail->Password = 'tPz6rHGrCw4t';
		//******************************************************
		$mail->setFrom($remitente , 'Virtuatienda');
		$mail->addReplyTo($remitente , 'noReply@virtuatienda.com');
		$mail->addAddress($mail_to, $nombre_usuario);
		$mail->Subject = 'Nueva pregunta en tu publicacion';
		//$mail->msgHTML(file_get_contents('message.html'), __DIR__);
		$mail->Body = "Hola ".$nombre_usuario.", tienes un nuevo mensaje en tu publicacion ".$mensaje." Responder";
		$mail->AltBody = 'This is a plain text message body';
		//$mail->addAttachment('test.txt');

		if (!$mail->send()) {
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    ?>
		       

		    <?php

				}


	}

	


	?>