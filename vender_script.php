<?php
session_start();
include('global/conexion2.php');
include('scripts/encuadrar_foto.php');

//comienza funcion */***********



$titulo = $_POST['titulo'];
$vendedor_nombre = $_SESSION['usuario'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$sub_categoria_1 = $_POST['sub_categoria_1'];
$condicion = $_POST['condicion'];
$cantidad = $_POST['cantidad'];


//$imagen = 'imagenes/'.$_FILES['foto']['name'];
// **  Obtener los datos del vendedor ****

$sql_usuario = "SELECT * FROM vt_usuarios WHERE usuario='$vendedor_nombre'";
$user_data = mysqli_query($conn, $sql_usuario);
foreach ($user_data as $user) {
  $vendedor = $user['id_vendedor'];
  $ubicacion = $user['ciudad'];
  $telefono = $user['telefono'];
  $mail = $user['email'];
  }

//-**** Logica de publicacion ***

    $path = rand(1000, 30000)."VT".$user['id_vendedor'];

    if ($_FILES['foto']['name'][0] == null) {
      $imagen = null;
    }else{
    $imagen = "imagenes/".$path.$_FILES['foto']['name'][0];
    $lienzo = imagecreatefromjpeg("imagenes/fondo.jpg");
    $imagenx = encuadrarFoto($imagen,$_FILES['foto']['tmp_name'][0],$user,$lienzo );    
    $f = imagejpeg($imagenx,$imagen);


    }  
   


    if($_FILES['foto']['name'][1] == null){
      $imagen2 = null;
    }else{

    $imagen2 = "imagenes/".$path.$_FILES['foto']['name'][1];
    $lienzo2 = imagecreatefromjpeg("imagenes/fondo.jpg");
    $imagenx2 = encuadrarFoto($imagen2,$_FILES['foto']['tmp_name'][1],$user,$lienzo2 );    
    $f2 = imagejpeg($imagenx2,$imagen2);


    }
    if($_FILES['foto']['name'][2] == null){
      $imagen3 = null;
    }else{
      $imagen3 = "imagenes/".$path.$_FILES['foto']['name'][2];
    $lienzo3 = imagecreatefromjpeg("imagenes/fondo.jpg");
    $imagenx3 = encuadrarFoto($imagen3,$_FILES['foto']['tmp_name'][2],$user,$lienzo3 );    
    $f3 = imagejpeg($imagenx3,$imagen3);


    }
    if($_FILES['foto']['name'][3] == null){
      $imagen4 = null;
    }else{
      $imagen4 = "imagenes/".$path.$_FILES['foto']['name'][3];
    $lienzo4 = imagecreatefromjpeg("imagenes/fondo.jpg");
    $imagenx4 = encuadrarFoto($imagen4,$_FILES['foto']['tmp_name'][3],$user,$lienzo4 );    
    $f4 = imagejpeg($imagenx4,$imagen4);


    }


    
  

$sql="INSERT INTO vt_publicaciones (titulo,ID_vendedor,ubicacion,precio,imagen,imagen2, imagen3, imagen4 ,mail,descripcion, categoria, sub_categoria_1, condicion, cantidad) VALUES('$titulo','$vendedor','$ubicacion','$precio','$imagen','$imagen2', '$imagen3', '$imagen4','$mail','$descripcion', '$categoria', '$sub_categoria_1','$condicion','$cantidad')";


if(mysqli_query($conn,$sql)){	
	header('Location: perfil.php?art=exito');
  echo '<script>alert("Articulo Grabado exitosamente !!");</script>';
}
else{
echo mysqli_error($conn);
}
mysqli_close($conn)





?>