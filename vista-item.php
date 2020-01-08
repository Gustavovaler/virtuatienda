<?php

include('header.php');
include('global/conexion2.php');
?>
	<title></title>
	<!--<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>-->
  <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos-item.css">
	<link rel="stylesheet" href="css/estilos-zoom.css">
	<link rel="stylesheet" href="css/jquery.wm-zoom-1.0.css">
	<script src="js/jquery.wm-zoom-1.0.js"></script>
	<script src="js/vista-item.js"></script>
	<script>
		$(function(){
			$(".zoom1").WMZoom({
				config:{
					stageW: 700,
					stageH:700,
					inner:false,
					position:'right',
					margin:10
				}
			});

		});
	</script>


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
 foreach ($resultado as $row) { 

 	$vendedor = $row['ID_vendedor'];

 	?>


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
<!--	-------------------------paneld e imagen------------------>		
			<aside class="zoom-contenedor zoom1">
				<div class="area-zoom">
			<img src="<?php  echo $row['imagen']; ?>" alt="" id="imagen-central" data-high-src="<?php  echo $row['imagen']; ?>" data-loader-src="imagenes/site/lupa.gif"  >	
			</div>	</div>
		</aside>

<!------------------------------------- fin de panel de imagen ----------->	
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
	<section>
		<div class="horizontal">
			<h4>Mas artículos del vendedor</h4>
		</div>
		<div class="vendedor-mas-art">

			<?php
			$sql_mas_art = "SELECT ID,imagen,titulo FROM  vt_publicaciones WHERE ID_vendedor='$vendedor' LIMIT 5";
			$mas_art_result = mysqli_query($conn, $sql_mas_art);
			
			foreach ($mas_art_result as $pub ) {
				$titulo_mod_pub = str_replace(' ', '-', $pub['titulo']);

				?>

				<div class="tarjeta-art">
				<a href="vista-item.php?ID=<?php echo $pub['ID'];echo '?';echo $titulo_mod_pub;?>"><img src="<?php echo $pub['imagen'];?>" alt=""></a>

				<div class="mas-art-descripcion">
					<?php echo $pub['titulo'];?>

				</div>
				</div>

			<?php
			}

			?>			

		</div>

	</section>

		<div class="horizontal">
			<h4>Descripcion:</h4>
		</div>

		<div class="descripcion">
			<h4><?php  echo $row['descripcion']; ?></h4>
			<hr>
			<h5>Categoría: <?php echo $row['categoria']."  --  Sub Categoria: ".$row['sub_categoria_1']; ?></h5>
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
			<!--<button  class="btn btn-success "> Comprar </button><button class="btn btn-outline-success" > Preguntar</button>-->
		</div>
		<div class="horizontal">
			<hr><br>
		</div>

 <?php
}?>


	
<!---------------------------SECCION PREGUNTAS ------------------------
--> 
<section class="preguntas-seccion">
	<div class="preguntas-container">
		<div class="preguntas-encabezado"><h3>Sección preguntas:</h3></div>
		<div class="preguntas-controles">
			<?php
			if (isset($_SESSION['usuario'])) { ?>
			<textarea name="nueva_pregunta" id="nueva_pregunta" cols="50" rows="3" class="pregunta-campo" required placeholder="Escribe tu pregunta aqui...."></textarea>
			<button class="boton-preguntar" onclick="mostrarRespuesta('usuario='+<?php echo $_SESSION['id_usuario']; ?>+'&vendedor='+<?php echo $row['ID_vendedor']; ?>+'&publicacion='+<?php echo $row['ID']; ?>)">Preguntar</button>
			<div id="confirmacion">
				
			</div>	
			<?php }else{ ?>
				<div id="confirmacion">
					Debes estar logead@ para poder preguntar <a href="login.php">Loguearme</a>
				</div>

			<?php	
			}
			?>	
			

		</div>
		<h5 id="titulo-preguntas">Ultimas preguntas de la publicacion: </h5>
		<div class="preguntas-enteras">
		<?php
		$sql_preguntas ="SELECT * FROM vt_preguntas WHERE publicacion='$id_producto' order by ID_pregunta desc ";
		$preguntas_resultado = mysqli_query($conn, $sql_preguntas);

		foreach ($preguntas_resultado as $preg) { ?>

			
			<div class="preguntas">
				<?php	echo $preg['pregunta']."<br>";?>


				<span class="fecha-pregunta"><?php $fecha = $preg['fecha']; $hor = (int)date('h')-3; echo date('d-m-Y  -  '.$hor.':i:s', strtotime($fecha));?></span>


			</div>
			<?php if ($preg['contestada'] == 1){?>

			<div class="respuesta">	
				 
				<?php echo $preg['respuesta']."<br>";?>
				 
			</div>
			<?php
		}
	}		

		?>
				 
			
				
		</div>
	</div>

</section>



	</div>
<?php 
include('footer.php');
?>
<script type="text/javascript">
		function mostrarRespuesta(str) {
    if (str == "") {
        document.getElementById("confirmacion").innerHTML = "hola";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        	
           if (this.readyState == 4 && this.status == 200) {
                document.getElementById("confirmacion").innerHTML = this.responseText;
               
            }
        };
         var nueva_pregunta_js = document.getElementById('nueva_pregunta').value;

        if (document.getElementById('nueva_pregunta').value != '') {
        	xmlhttp.open("GET","scripts/ask_reader.php?"+str+"&mensaje="+nueva_pregunta_js,true);
       		 xmlhttp.send();
        	 document.getElementById('nueva_pregunta').value = "";
    }else{
    	alert('El campo de la pregunta esta vacío. !');
    }


    }
}
</script>
</body>
</html>