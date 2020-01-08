<?php
include('global/conexion2.php');
include('header.php');
if (isset($_POST['submit'])) {
  
  if (!empty($_POST['palabra'])){



	$busqueda = $_POST['palabra'];



	$sql = "SELECT ID, titulo FROM vt_publicaciones WHERE titulo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' LIMIT 50";

	$resultado = mysqli_query($conn, $sql);
	foreach ($resultado  as $row ) {

    
		echo $row['ID'];
    echo '  -  ';
    echo $row['titulo'];
    echo "<br>";
	}
  header("location:listado.php?search=".$_POST['palabra']);
}else{
  
}
}

?>
<title>Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	<input type="text" name="palabra">

	<input type="submit" name="submit" value="Buscar">
	

</form>


<!--
 
//DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe 
if ($busqueda<>''){   
//CUENTA EL NUMERO DE PALABRAS 
   $trozos=explode(" ",$busqueda); 
   $numero=count($trozos); 
  if ($numero==1) { 
   //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE 
   $cadbusca="SELECT REFERENCIA, TITULO FROM ARTICULOS WHERE VISIBLE =1 AND DESARROLLO LIKE '%$busqueda%' OR TITULO LIKE '%$busqueda%' LIMIT 50"; 
  } elseif ($numero>1) { 
  //SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST 
  //busqueda de frases con mas de una palabra y un algoritmo especializado 
  $cadbusca="SELECT REFERENCIA, TITULO , MATCH ( TITULO, DESARROLLO ) AGAINST ( '$busqueda' ) AS Score FROM ARTICULOS WHERE MATCH ( TITULO, DESARROLLO ) AGAINST ( '$busqueda' ) ORDER BY Score DESC LIMIT 50"; 
} 
$result=mysql("teleformacion", $cadbusca); 
While($row=mysql_fetch_object($result)) 
{ 
   //Mostramos los titulos de los articulos o lo que deseemos... 
  $referencia=$row->REFERENCIA; 
   $titulo=$row->TITULO; 
   echo $referencia." - ".$titulo."<br>";; 
} 
-->