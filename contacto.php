<?php 
include ('header.php');
include ('global/conexion2.php');
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre']." ".$_POST['apellido'];
	$correo = $_POST['correo'];
	$mensaje =  $_POST['mensaje'];
	$remitente = 'info@virtuatienda.com';
	$destino = 'gustavodevaler@gmail.com';




	//$remitente = $_POST['remitente'];
//$destino = $_POST['destinatario'];


$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'info@virtuatienda.com';
$mail->Password = 'tPz6rHGrCw4t';
$mail->setFrom($remitente , 'Gustavo de Virtuatienda');
$mail->addReplyTo($correo , $nombre); //con que remitente llega el mail
$mail->addAddress($destino, 'Gustavo');// a quien le llega el mail
$mail->Subject = 'Mensaje de la pagina';
//$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = $mensaje;
//$mail->AltBody = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:mail_enviado.php');
}

}
?>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/contacto.css">
<div class="container">


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h2><i>Estamos aguardando tu mensaje...</i></h2><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Ej. Martin" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Ej. Garcia" name="apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="micorreo@something.com" name="correo">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mensaje</label>
    <textarea type="text" class="form-control" id="inputAddress2" placeholder="Su mensaje..." name="mensaje"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Enviar Mensaje</button>
</form>
<br>















</div>

