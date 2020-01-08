<?php 
include('header.php');
#include('../global/conexion2.php');
?>


<link rel="stylesheet" href="css/listado.css">

<!--caja de articulo-->
<?php
$sql = "SELECT titulo,imagen,precio FROM vt_publicaciones";
$consulta = mysqli_query($conn,$sql);
foreach ($consulta as $row) {
	?>
<div class="caja">
	<div class="sub-caja">
	<div class="foto">
		<a href="">
			<img src="https://virtuatienda.com/<?php echo $row['imagen']; ?>" alt="">
		</a>
	</div>
	<div class="titulo">
		<a href=""><?php echo $row['titulo']; ?></a>
	</div>
	<div class="precio">
		$ <?php echo $row['precio']; ?>
	</div>
</div>
</div>
	
<?php
}
?>


