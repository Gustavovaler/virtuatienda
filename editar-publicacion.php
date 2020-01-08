<?php

include('header.php');
include('global/conexion2.php');

?>
<script
      src="https://code.jquery.com/jquery-3.2.0.min.js"
      integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
      crossorigin="anonymous"></script>
<!--      <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>-->
<?php

 $id_producto = $_GET['ID'];

 $sql = "SELECT * FROM vt_publicaciones WHERE ID='$id_producto'";



 $resultado = mysqli_query($conn,$sql);

 foreach ($resultado as $row) { ?>
 	<div class="container">
 		<div class="edit-titulo">
 	<h1><?php echo $row['titulo']; ?> </h1><div class="controls">Editar titulo</div>
	</div>
	<div class="edit-images">
 	<img src="<?php echo $row['imagen'];?>" alt="" width="200">
 	
 	<img src="<?php echo $row['imagen2'];?>" alt="" width="200">
 	<img src="<?php echo $row['imagen3'];?>" alt="" width="200">
 	<img src="<?php echo $row['imagen4'];?>" alt="" width="200">
 	<div class="controls">
 		<ul>
 			<li>Imagen 1</li>
 			<li>Imagen 2</li>
 			<li>Imagen 3</li>
 			<li>Imagen 4</li>
 		</ul>
 	</div>
    </div>
    <div class="edit-precio">
    	<h3>Precio : <span id="precio"><?php echo $row['precio']; ?></span></h3>
    	<p id="editar-precio">Editar precio</p>
    </div>
    <div class="edit-desc">

 	<p><h3>Descripcion: <b><?php echo $row['descripcion']; ?></b></h3><a href="">Editar descripcion</a></p>
 	<p><h3>Creada: <b><?php echo $row['creacion']; ?></b></h3></p>
    </div>
    <div class="edit-cat">
 	<h4>Categoria: <?php echo $row['categoria']; ?></h4>	
 	<h4>Sub Categoria : <?php echo $row['sub_categoria_1']; ?>	</h4>
 	</div>
 <?php	 	
 }

?>

 	<?php
 	$id_vendedor = $row['ID_vendedor'];
 
 	$sql_vendedor = "SELECT * FROM vt_usuarios WHERE id_vendedor='$id_vendedor'";
 	echo "<br>";
 	
 	

 	$ficha_vendedor = mysqli_query($conn,$sql_vendedor);

 	if ($ficha_vendedor) {
 		foreach ($ficha_vendedor as $usuario) {
 			echo '<h4>Vendedor : ';
 			echo $usuario['usuario'].' ';
 			

 			echo '</h4>';
 		}
 	}else{
 		echo '<br>No hay datos';
 	}

 	


 	


 	?>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/editar-item.css">
 </div>

 <script>
     var precio = $('#precio').text();
     var btnPrecio = $('#editar-precio').click(cambiarPrecio);

     function cambiarPrecio(){
        
     }



  

 </script>
 <div id="boxes">

    
    <!-- #customize your modal window here -->

    <div id="dialog" class="window">
        <b>Testing of Modal Window</b> | 
        
        <!-- close button is defined as close class -->
        <a href="#" class="close">Close it</a>

    </div>

    
    <!-- Do not remove div#mask, because you'll need it to fill the whole screen -->    
    <div id="mask"></div>
</div>