<?php

include("header.php");
include("global/conexion2.php");

$nombre = $_POST['nombre-in'];
echo $nombre;
$apellido = $_POST['apellido-in'];
$email = $_POST['email-in'];
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $email;
$telefono = $_POST['telefono-in'];
$provincia = $_POST['provincia-in'];
$ciudad = $_POST['ciudad-in'];
$direccion = $_POST['direccion-in'];
$dni = $_POST['dni-in'];
$usuario = $_POST['usuario-in'];
$password = $_POST['password-in'];
$pass = password_hash($password, PASSWORD_BCRYPT);
//echo $_POST['re-password-in']."<br>";

$sql = "INSERT INTO vt_usuarios (nombre,apellido,email,telefono,provincia,ciudad,direccion,dni,usuario,pass) VALUES('$nombre','$apellido', '$email', '$telefono', '$provincia', '$ciudad', '$direccion', $dni,'$usuario', '$pass')";

if(mysqli_query($conn,$sql)){
	echo '<script>alert("Articulo Grabado exitosamente !!");</script>';
	
	header('Location: index.php');
}
else{


	$error = mysqli_error($conn);
	
	$duplicado = 'Duplicate entry';

	if (!substr_compare($duplicado, $error, 0, strlen($duplicado), true)) {
		header('location: registro.php?usr=preexistente');
	}else{
		
	}
}
mysqli_close($conn)


?>

