<?php

include('header.php');
include('global/conexion2.php');
?>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos-item.css">
	<script src="js/vista-item.js"></script>


<div class="noticias-producto">
	Mapa del sitio | 
	<a href="<?php echo $_SERVER['HTTP_REFERER'];?>">Volver al listado >></a>
</div>

<?php

if (isset($_GET['ID'])) {
	$id_producto = $_GET['ID'];
}else{

	$id_producto =64;
}

 

 $sql = "SELECT * FROM vt_publicaciones WHERE ID='$id_producto'";



 $resultado = mysqli_query($conn,$sql);
 foreach ($resultado as $row) { ?>
	<div class="container">
		<section>
		<div class="izquierda">
			<div class="col-izquierda">
				<img src="<?php  echo $row['imagen']; ?>" alt="" class="miniatura" >
				<?php if ($row['imagen2'] != 'imagenes/') { ?>
				   <img src="<?php  echo $row['imagen2']; ?>" alt="" class="miniatura" >
				   <?php
				} ?>
				<?php if ($row['imagen3'] != 'imagenes/') { ?>
				   <img src="<?php  echo $row['imagen3']; ?>" alt="" class="miniatura" >
				   <?php
				} ?>
				<?php if ($row['imagen4'] != 'imagenes/') { ?>
				   <img src="<?php  echo $row['imagen4']; ?>" alt="" class="miniatura" >
				   <?php
				} ?>
				
			</div>
			<img src="<?php  echo $row['imagen']; ?>" alt="" id="imagen-central">	
				
		</div>


		<div class="derecha">
			<h3><?php  echo $row['titulo']; ?></h3>
		</div>
		<div class="derecha2">
			<h3>$ <?php  echo $row['precio']; ?> </h3>
		</div>

		<div class="derecha2">
			<h5>Calidad : <span id="stars">1 2 3 4 5</span></h5>
		</div>
		<div class="derecha2">
			<h5>Unidades disponibles:  <?php echo $row['cantidad'];?>  </h5>
		</div>
		<div class="derecha2">
			<h5>Condicion: <?php echo $row['condicion'];?></h5>
		</div>
		<div class="derecha3">
			<button  class="btn btn-primary"> Comprar </button><button class="btn btn-outline-primary" > Preguntar</button>
		</div>
		

	</section>

		<div class="horizontal">
			<h4>Descripcion:</h4>
		</div>

		<div class="descripcion">
			<h4><?php  echo $row['descripcion']; ?></h4>
			<h5>Categoría: <?php echo $row['categoria']."  Sub Categoria: ".$row['sub_categoria_1']; ?></h5>
		</div>
		
		<div class="horizontal">
			<h4>Ubicacion</h4>
		</div>
		<div class="descripcion">
			<h4><?php  echo $row['ubicacion']; ?></h4>
		</div>
		<div class="horizontal">
			<hr>
			
		</div>
		<div class="horizontal">
			<h4>Formas de envio Habilitadas</h4>
		</div>
		<div class="descripcion">
			<h4>Retirar por domicilio del vendedor.</h4>
		</div><br>

		<div class="acciones">
			<button  class="btn btn-success "> Comprar </button><button class="btn btn-outline-success" > Preguntar</button>
		</div>
		<div class="horizontal">
			<hr><br>
		</div>

 <?php
}


?>

	</div>

</body>
</html>