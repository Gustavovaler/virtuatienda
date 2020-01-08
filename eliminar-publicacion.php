<?php 
include('global/conexion2.php');

$id = $_GET['ID'];
$titulo = $_GET['titulo'];
$imagen = $_GET['imagen'];

$sql_recuperar_publicacion = "SELECT imagen2,imagen3, imagen4 FROM vt_publicaciones WHERE ID='$id'";
$resultado = mysqli_query($conn, $sql_recuperar_publicacion);

foreach ($resultado as $key) {
	if ($key['imagen2'] != "") {
		unlink($key['imagen2']);
		
	}
	if ($key['imagen3'] != "") {
		unlink($key['imagen3']);
		
	}
	if ($key['imagen4'] != "") {
		unlink($key['imagen4']);
		
	}

}

$sql = "DELETE FROM vt_publicaciones WHERE ID='$id' AND titulo='$titulo'";
unlink($imagen);
$operacion = mysqli_query($conn, $sql);

if(mysqli_close($conn)){
	
	header("refresh:3;url=perfil.php");
}
?>

<link rel="stylesheet" href="css/eliminar-publicacion.css">
<div class="container">
	<div class="col">
		<h1>Publicacion eliminada!</h1>
		<h4>Redireccionando ....</h4>
	</div>
</div>