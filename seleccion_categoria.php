<?php
include('header.php');
if(!isset($_SESSION['usuario'])){
   header("Location:login.php");}

 ?>
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/vender.css">

 <div class="container">
 	<h1>Elige una categoria </h1>

 	<table>
 		
 		<tr class="row">
 			<td class="col" ><a href="vender.php?categoria_id=2&cat=Tecnologia"><div class="contenido-celda"><b><i>Tecnología</i></b></div ></a></td>
 			<td class="col" ><a href="vender.php?categoria_id=22&cat=Computacion"><div class="contenido-celda"><b><i>Computacion</i></b></div ></a></td>
 			<td class="col" ><a href="vender.php?categoria_id=16&cat=Electro y Hogar"><div class="contenido-celda"><b><i>Electro y Hogar</i></b></div ></a></td>
 			<td class="col" ><a href="vender.php?categoria_id=15&cat=Video Juegos"><div class="contenido-celda"><b><i>Video Juegos</i></b></div ></a></td>
 			<td class="col" ><a href="vender.php?categoria_id=5&cat=Libros"><div class="contenido-celda"><b><i>Libros</i></b></div ></a></td>
 		</tr>
 		<tr class="row">
 			<td class="col2" ><a href="vender.php?categoria_id=1&cat=Vehiculos"><div class="contenido-celda"><b><i>Vehiculos</i></b></div ></a></td>
 			<td class="col2" ><a href="vender.php?categoria_id=20&cat=Repuestos"><div class="contenido-celda"><b><i>Repuestos</i></b></div ></a></td>
 			<td class="col2" ><a href="vender.php?categoria_id=17&cat=Industria"><div class="contenido-celda"><b><i>Industria</i></b></div ></a></td>
 			<td class="col2" ><a href="vender.php?categoria_id=18&cat=Herramientas"><div class="contenido-celda"><b><i>Herramientas</i></b></div ></a></td>
 			<td class="col2" ><a href="vender.php?categoria_id=19&cat=Servicios"><div class="contenido-celda"><b><i>Servicios</i></b></div ></a></td>
 		</tr>
 		<tr class="row">
 			<td class="col3" ><a href="vender.php?categoria_id=12&cat=Deportes"><div class="contenido-celda"><b><i>Deportes</i></b></div ></a></td>
 			<td class="col3" ><a href="vender.php?categoria_id=13&cat=Aire Libre"><div class="contenido-celda"><b><i>Aire Libre</i></b></div ></a></td>
 			<td class="col3" ><a href="vender.php?categoria_id=1&cat=Indumentaria"><div class="contenido-celda"><b><i>Indumentaria</i></b></div ></a></td>
 			<td class="col3" ><a href="vender.php?categoria_id=21&cat=Calzado"><div class="contenido-celda"><b><i>Calzado</i></b></div ></a></td>
 			<td class="col3" ><a href="vender.php?categoria_id=14&cat=Juguetes y Bebe"><div class="contenido-celda"><b><i>Juguetes y Bebe</i></b></div ></a></td>
 		</tr>
 		
 	
 	</table>
 	
 </div>

</body>
</html>

