<!DOCTYPE html>
<html lang="es">
<head>
	  <script src="js/header.js"></script>
  <script type="text/javascript">
    if (isMobile()) {
       location.href="https://m.virtuatienda.com"
       location.href="m.virtuatienda_com";
    };
  </script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta keyword="compra, venta, virtuatienda, electronico , computacion , comprar, argentina, buenos aires">
	<link rel="stylesheet" href="css/menu-resp.css">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
	<script
  src="https://code.jquery.com/jquery-3.4.0.min.js">
  	
  </script>
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">

  
</head>
<body>

		<nav>
			<div class="toggle"><div class="menu">				
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
 			</div>
			<ul><li class="item">
					<h2 class="brand">Virtuatienda.com</h2>
				</li>
				
				
				<?php

				session_start();
				if (isset($_SESSION['usuario'])) {?>

				<li class="item"><a href="index.php">Inicio</a></li>
				<li class="item"><a href="listado.php?page=1">Productos</a></li>
				<li class="item"><a href="seleccion_categoria.php">Vender</a></li>
				
				
				
				<li class="item"><a href="contacto.php">Contacto</a></li>
				<li class="item"><a href="perfil.php?<?php echo $_SESSION['usuario']; ?>">Mi perfil</a></li>
				<li class="item"><a href="ayuda.php">Ayuda</a></li>
				<li class="item"><a href="logout.php">Salir</a></li>
				<li class="item"><a href="#"> Bienvenido  <?php echo  ucfirst($_SESSION['usuario']); ?></a></li>


				<?php
				}else{?>

				<li class="item"><a href="index.php">Inicio</a></li>
				<li class="item"><a href="listado.php?page=1" id="categorias_desplegable">Productos</a>
					<!--<ul>
						<li class="menu_desplegable">Automoviles</li>
						<li class="menu_desplegable">Electronica y computacion</li>
						<li class="menu_desplegable">Ropa , calzado y accsesorios</li>
						<li class="menu_desplegable">Fabrica e Industria</li>
						<li class="menu_desplegable">Otros</li>
					</ul>-->
					
				</li>
				<li class="item"><a href="seleccion_categoria.php">Vender</a></li>
				<li class="item"><a href="registro.php">Registrarse</a></li>
				<li class="item"><a href="login.php">Ingresar</a></li>
				<li class="item"><a href="contacto.php">Contacto</a></li>
				<li class="item"><a href="ayuda.php">Ayuda</a></li>


				<?php
				}

				?>
				

				
			</ul>
		</nav>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$('.menu').click(function(){
  			$('ul').toggleClass('active');
  		})
  	})
  </script>