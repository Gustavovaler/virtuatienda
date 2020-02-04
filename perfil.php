<?php
include('header.php');
include('global/conexion2.php');

if(!isset($_SESSION['usuario'])){
   header("Location:login.php");
}

?>
<title>Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
  <script src="js/modal.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/perfil.css">
<script src="js/perfil.js"></script>


<body>
    

<div class="container">
	<div class="row">
		<div class="col superior"></div>
		<div class="col superior"></div>
		<div class="col superior"></div>
		<div class="col superior"></div>
	</div>
  <div class="row">
    <div class="col-2"><!--columna izquierda-->
       <div class="cabecera-izquierda">
       	<span id="notificaciones-btn">Notificaciones</span> <br>
		<span id="preguntas-btn">Preguntas</span><span id="preguntas_cantidad"></span> <br>
		<span id="compras-btn">Compras</span> <br>
		<span id="ventas-btn">Ventas</span> <br>
		<span id="publicaciones-btn">Publicaciones</span><span id="publicaciones_cantidad"></span> <br>
		<span id="datos-btn">Mis Datos</span> <br>
		<hr>
	</div>
    </div>


     <!--****************** PANEL NOTIFICACIONES ******************-->

    <div class="col-10">
    	<div id="notificaciones-content">
    		notificaciones
    	</div>

<?php
		$usuario = $_SESSION['usuario'];
		$sql = "SELECT * FROM vt_usuarios WHERE usuario='$usuario' " ;

		$resultado = mysqli_query($conn,$sql);

		foreach ($resultado as $row) {
			?>
    <!--****************** PANEL PREGUNTAS ******************-->

    	<div id="preguntas-content">

    	<?php
    	$vendedor_id = $row['id_vendedor'];
    	$sql_preguntas = "SELECT * FROM vt_preguntas WHERE vendedor='$vendedor_id'";
    	$preguntas_result = mysqli_query($conn,$sql_preguntas);    		 	
    	$contador = 0;
			foreach ($preguntas_result as $key ) {

    		if ($key['contestada'] == 0) {

    			$contador++;
    			 ?>
    			 <div class="preguntas">
                    <a href="vista-item.php?ID=<?php echo $key['publicacion'];?>"><span id="titulo_publicacion">
                       <!-- ---- conseguimos el titulo de las pblicaciones   todo adentro de un span ------->
                       <?php
                       $publicacion_titulo_id = $key['publicacion'];
                       $query_titulo = "SELECT titulo FROM vt_publicaciones WHERE ID='$publicacion_titulo_id'";
                       $titulos = mysqli_query($conn, $query_titulo);
                       foreach ($titulos as $tit) {
                           echo $tit['titulo'];
                       
                      
                       }


                       ?>

                       <!--------- fin seccion titulo publicaciones ------>
                        
                    </span></a><br>
    			 	<?php
                    echo '<span style="color: green;"><i><u>Pregunta</u>:</span> </i>';  
                    echo $key['pregunta'];
    				 echo "<br>"; ?>

    			 </div>
    			 <div class="contestar">

    			<textarea name="" id="nueva_respuesta" cols="55" rows="1" placeholder="Responder"></textarea>
    			<button onclick="guardarRespuesta(<?php echo $key['ID_pregunta'];?>)">Responder</button></div>

		<?php

    		}
    	  }

    	if ($contador == 0) { ?>
    		<p class="no-preguntas">
    			No hay Preguntas sin reponder en este momento !
    		</p> 

    		<?php
    	}else{
            echo '<script type="text/javascript">document.getElementById("preguntas_cantidad").innerHTML ="("+'.$contador.'+")";</script>';
        }
    	 
    	
       ?>
    		
        
    		
    	</div>
	<!--****************** PANEL COMPRAS ******************-->
    	<div id="compras-content">

			Desde aqui podrás ver tus compras. 
    	</div>

    <!--****************** PANEL VENTAS ******************-->

    	<div id="ventas-content">
    		Tus ventas se verán aqui cuando las tengas. 
    	</div>

    <!--****************** PANEL PUBLICACIONES ******************-->

    	<div id="publicaciones-content">
    		<?php
			

			$sql_publicaciones = "SELECT titulo,imagen, ID FROM vt_publicaciones WHERE ID_vendedor='$vendedor_id'";
			    $resultado_publicaciones = mysqli_query($conn, $sql_publicaciones);
          $cant_publicaciones = mysqli_num_rows($resultado_publicaciones);

            if ($cant_publicaciones != 0) {
                echo '<script type="text/javascript">document.getElementById("publicaciones_cantidad").innerHTML ="("+'.$cant_publicaciones.'+")";</script>';
            
            
        
			foreach ($resultado_publicaciones as $publi) {
				 $titulo_mod = str_replace(' ', '-', $publi['titulo']);

				?>
				<div class="publicacion">
                    <div class='foto_miniatura'><img src="<?php echo $publi['imagen']; ?>" alt="" width="70"  ></div>
                    <div class="titulo-publi"><b> <a href="vista-item.php?ID=<?php echo $publi['ID']; ?>?<?php echo $titulo_mod;?>"> 
                    <p ><?php echo $publi['titulo']; ?> </p></a>  </b> 
				</div>
				<div class="controles">
                    <a href="editar-publicacion.php?ID=<?php echo $publi['ID']; ?>&titulo=<?php echo $publi['titulo'];?>"><img src="imagenes/site/editar.png" alt="Eliminar"></a> -
                 <!--<a href="eliminar-publicacion.php?ID=?php echo $publi['ID']; ?>&titulo=?php echo $publi['titulo'];?>&imagen=?php echo $publi['imagen']; ?>">--><img src="imagenes/site/eliminar.png" alt="" class="btn_eliminar" value="<?php  echo $publi['ID']."&titulo=".$publi['titulo']."&imagen=".$publi['imagen']; ?>"><br>  
                </div>
				
			</div>

			<?php }
    }else{
      echo "No tienes publicaciones activas. <a href='seleccion_categoria.php'>Crear una publicacion</a>";
    }

			?>
    	</div>

    	<!--****************** PANEL DATOS ******************-->

    	<div id="datos-content">
    		

		<h4>Mis datos: </h4><br>
			Vendedor ID: <?php echo $row['id_vendedor']; ?><br>
			Usuario: <?php echo $row['usuario']; ?><br>
			Nombre: <?php echo $row['nombre']; ?><br>
			Apellido:<?php echo $row['apellido']; ?><br>
		   	Email: <?php echo $row['email']; ?><br>
		   	Telefono: <?php echo $row['telefono']; ?><br>
		   	Provincia: <?php echo $row['provincia']; ?><br>
		   	Ciudad: <?php echo $row['ciudad']; ?><br>
		   	Direccion: <?php echo $row['direccion']; ?><br>

			<?php }

            mysqli_close($conn);


			?>
	    	</div>
			      
	    </div>
			  
	</div>
</div>

	<?php
	include('footer.php');


	?>



</body>












