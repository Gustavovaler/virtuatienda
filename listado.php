<?php 
include('global/conexion2.php');
include('header.php');
include('barra_de_busqueda.php');

?>
<title>Listado productos - Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<link rel="stylesheet" href="css/listado.css">
<script
      src="https://code.jquery.com/jquery-3.2.0.min.js"
      integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
      crossorigin="anonymous"></script>
<script src="js/listado.js"></script>
<div class="noticias-producto">
	Mapa del sitio
</div>

<div class="contenedor">
	<div class="sub-contenedor-izq">
		<h2>Filtros</h2><br>

		<h4>Ubicacion</h4>
		<ul class="filtros">
			<li>Capital Federal</li><br>
			<li>Buenos Aires </li>
		</ul>

		<h4>Condicion</h4>
		<ul class="filtros">
			<li>Nuevo</li><br>
			<li>Usado</li>
		</ul>
		
		<h4>Rango de Precio</h4>
		<br>
		<label for="">Cantidad de productos por pagina:</label>

		<select name="cantidad_de_registros" id="cantReg">
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="15">15</option>
			<option value="20">20</option>
			<option value="30">30</option>
		</select>
	</div>

	<?php

	if (!isset($_GET['page'])) {
		$_GET['page']=1;
	}


	$busqueda = $_GET['search'];
	$sql ="SELECT ID FROM vt_publicaciones WHERE titulo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' LIMIT 50"; 

    $contador = 1;

     $resultado = mysqli_query($conn,$sql);

     #              VARIABLES DE PAGINACION                #
     ##########################################

 	$cantidad_registros = mysqli_num_rows($resultado);
 	if (isset($_GET['tam_pag'])) {
 		$tama_paginas = $_GET['tam_pag'];
 	}else{
 		$tama_paginas = 30;
 	}
   
    $cant_paginas = ceil($cantidad_registros/$tama_paginas);
    $registro_corriente = ($_GET['page']-1)*$tama_paginas;
   

    ##########################################

    #mysqli_close($conn);

    $sql_limitado = "SELECT * FROM vt_publicaciones WHERE titulo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' LIMIT 50"; 
//"SELECT * FROM vt_publicaciones LIMIT  $registro_corriente,$tama_paginas";

    $resultado2 = mysqli_query($conn,$sql_limitado);


     foreach ($resultado2 as $row) {
      $titulo_mod = str_replace(' ', '-', $row['titulo']);


      ?>
	
	<div class="fila">

		<div class="titulo-img">
			<a href="vista-item.php?ID=<?php echo $row['ID']; ?>?<?php echo $titulo_mod;?>">
	<img src="<?php echo $row['imagen']; ?>" alt=""></a></div>

		<div class="titulo">
			<a href="vista-item.php?ID=<?php echo $row['ID']; ?>?<?php echo $titulo_mod;?>">
			<?php echo $row['titulo']; ?></a><br>

			<div class="precio">	$ <?php echo $row['precio']; ?></div>
			<div class="ubicacion">
				<?php echo $row['ubicacion']; ?>
			</div>
		
			</div>
			
			
		
	</div>
	<?php
}

// ------------------- CONTROL DE PAGINACION -------------------------

if ($_GET['page']>1) {
 echo "<a href='listado.php?page=".($_GET['page']-1)."'>Anterior</a>";
}

 //echo "  ".$_GET['page']."  ";
 for ($i=1; $i <=$cant_paginas ; $i++) { ?>
 	<a href="listado.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>

 	<?php
 }


 if ($_GET['page']<$cant_paginas) {
 	echo "<a href='listado.php?page=".($_GET['page']+1)."'>Siguiente</a>";
 }
 
// ------------------- FIN CONTROL PAGINACION ------------------------   
?>


</div>
<?php

include('footer.php');
?>