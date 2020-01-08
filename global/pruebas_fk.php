<?php
include('config.php');

$con = new mysqli(SERVIDOR, USUARIO, PASSWORD, BD);

if($con->connect_error){
	die('No se pudo conectar :'.$con->connect_error) ;
}else{
	echo "Conctado <br>";
}

$tabla1 = "CREATE TABLE IF NOT EXISTS usuarios(
			id int primary key auto_increment,
			nombre varchar(50) NOT NULL,
			apellido VARCHAR (50) NOT NULL)
			ENGINE = InnoDB default charset = utf8";

$tabla2 = "CREATE TABLE IF NOT EXISTS productos(
			id int primary key auto_increment,
			descripcion VARCHAR(50) NOT NULL,
			propietario int NOT NULL)
			ENGINE = InnoDB default charset = utf8";


$sql_fk = "ALTER TABLE productos add 
 foreign key (propietario) 
references usuarios(id) on delete cascade on update cascade";


if (!$con->query($tabla1)) {
	die('Hubo un error');
}else{
	echo 'tabla usuarios creada<br>';
}
if (!$con->query($tabla2)) {
	die('Hubo un error');
}else{
	echo 'tabla productos creada<br>';
}

if (!$con->query($sql_fk)) {
	die('claves foraneas no creadas');
}else{
	echo 'claves foraneas creadas exitosamente !! '.$con->error.$con->errno;
}
?>