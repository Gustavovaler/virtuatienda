

<?php

include('config.php');

$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD,BD);
if ($conexion->connect_error){
	die("La conexion Falló : ".$conexion->connect_error);
}else{
	echo "Conectado <br>";
}


$sql_categorias= "CREATE TABLE IF NOT EXISTS vt_categorias (
       ID int PRIMARY KEY AUTO_INCREMENT, 
       categoria VARCHAR(125) NOT NULL)
        ENGINE = InnoDB DEFAULT CHARSET = utf8";


$sql_preguntas = "CREATE TABLE IF NOT EXISTS vt_preguntas (
						ID_pregunta int PRIMARY KEY AUTO_INCREMENT, 
						pregunta VARCHAR(200) NOT NULL,
						respuesta VARCHAR(300) DEFAULT NULL,
						publicacion int NOT NULL,
						usuario int NOT NULL,
						vendedor int NOT NULL,
						fecha DATETIME NOT NULL DEFAULT current_timestamp(),
						leida int DEFAULT 0,
						contestada int DEFAULT 0,
						estado int DEFAULT 0)
						ENGINE = InnoDB DEFAULT CHARSET = utf8";


$sql_publicaciones = "CREATE TABLE IF NOT EXISTS vt_publicaciones(
					    ID int PRIMARY KEY AUTO_INCREMENT,
					    ID_vendedor int NOT NULL,
					    titulo VARCHAR(60) NOT NULL,
					    ubicacion VARCHAR(120) DEFAULT NULL,
					    precio decimal(10,2) NOT NULL,
					    imagen VARCHAR(150) NOT NULL,
					    imagen2 VARCHAR(150) DEFAULT NULL,
					    imagen3 VARCHAR(150) DEFAULT NULL,
					    imagen4 VARCHAR(150) DEFAULT NULL,
					    telefono int(25) DEFAULT NULL,
					    mail VARCHAR(120) DEFAULT NULL,
					    descripcion VARCHAR(300) DEFAULT NULL,
					    categoria VARCHAR(60) DEFAULT 'Producto',
					    sub_categoria_1 VARCHAR(100) DEFAULT 'Sub Producto',
					    condicion VARCHAR(12) DEFAULT 'Nuevo',
					    cantidad int DEFAULT 1,
					    creacion TIMESTAMP DEFAULT current_timestamp(),
					    estado int(1) DEFAULT 1)
					    ENGINE = InnoDB DEFAULT CHARSET = utf8";

$sql_sub_categoria_1 = "CREATE TABLE IF NOT EXISTS vt_sub_categoria_1(
						ID int PRIMARY KEY AUTO_INCREMENT,
						sub_categoria_1 VARCHAR(124) NOT NULL,
						categoria int NOT NULL)
						ENGINE = InnoDB DEFAULT CHARSET = utf8";

$sql_usuarios = "CREATE TABLE IF NOT EXISTS vt_usuarios(
				 id_vendedor int PRIMARY KEY AUTO_INCREMENT,
				 nombre VARCHAR(60) NOT NULL,
				 apellido VARCHAR(60) NOT NULL,
				 email VARCHAR(150) NOT NULL,
				 telefono VARCHAR(30) NOT NULL,
				 provincia VARCHAR(40) NOT NULL,
				 ciudad VARCHAR(150) DEFAULT NULL,
				 direccion VARCHAR(150) NOT NULL,
				 dni int(8) NOT NULL,
				 pass VARCHAR(150) NOT NULL,
				 fecha timestamp DEFAULT current_timestamp(),
				 usuario VARCHAR(100) NOT NULL,
				 activo int(4) DEFAULT 0,
				 is_admin int(4) DEFAULT 0)
				 ENGINE = InnoDB DEFAULT CHARSET = utf8";

if ($conexion->query($sql_usuarios)) {
	echo "La tabla vt_usuarios se creó con éxito.<br>";
}else{
	echo "Tabla vt_usuarios no creada: " . $conexion->error . '<br>';
}
if ($conexion->query($sql_categorias)) {
	echo "La tabla vt_categorias se creó con éxito.<br>";
}else{
	echo "Tabla vt_categorias no creada: " . $conexion->error . '<br>';
}
if ($conexion->query($sql_publicaciones)) {
	echo "La tabla publicaciones se creó con éxito.<br>";
}else{
	echo "Tabla publicaciones no creada: " . $conexion->error . '<br>';
}
if ($conexion->query($sql_preguntas)) {
	echo "La tabla vt_preguntas se creó con éxito..<br>";
}else{
	echo "Tabla vt_preguntas no creada: " . $conexion->error . '<br>';
}

if ($conexion->query($sql_sub_categoria_1)) {
	echo "La tabla vt_sub_categoria_1 se creó con éxito..<br>";
}else{
	echo "Tabla vt_sub_categoria_1 no creada: " . $conexion->error . '<br>';
}


$conexion->close;

?>