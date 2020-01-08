<?php
include('../global/conexion2.php');
?>
<html>

</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta keyword="compra, venta, virtuatienda, electronico , computacion , comprar, argentina, buenos aires">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/header.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">Virtuatienda.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
  <?php

        session_start();
        if (isset($_SESSION['usuario'])) {?>

        <li  class="nav-item active"><a href="index.php" class="nav-link" >Inicio</a></li>
        <li  class="nav-item active"><a href="listado.php?page=1" class="nav-link" >Productos</a></li>
        <li  class="nav-item active"><a href="seleccion_categoria.php" class="nav-link" >Vender</a></li>
        
        
        
        <li  class="nav-item active"><a href="contacto.php" class="nav-link" >Contacto</a></li>
        <li  class="nav-item active"><a href="perfil.php?<?php echo $_SESSION['usuario']; ?>" class="nav-link" >Mi perfil</a></li>
        <li class="nav-item active"><a href="ayuda.php" class="nav-link" >Ayuda</a></li>
        <li  class="nav-item active"><a href="logout.php" class="nav-link" >Salir</a></li>
        <li  class="nav-item active"><a href="#" class="nav-link" > Bienvenido  <?php echo  ucfirst($_SESSION['usuario']); ?></a></li>


        <?php
        }else{?>

        <li  class="nav-item active"><a href="index.php" class="nav-link" >Inicio</a></li>
        <li  class="nav-item active"><a href="listado.php?page=1" id="categorias_desplegable" class="nav-link" >Productos</a>
          <!--<ul>
            <li class="menu_desplegable">Automoviles</li>
            <li class="menu_desplegable">Electronica y computacion</li>
            <li class="menu_desplegable">Ropa , calzado y accsesorios</li>
            <li class="menu_desplegable">Fabrica e Industria</li>
            <li class="menu_desplegable">Otros</li>
          </ul>-->
          
        </li>
        <li  class="nav-item active"><a href="seleccion_categoria.php" class="nav-link" >Vender</a></li>
        <li  class="nav-item active"><a href="registro.php" class="nav-link" >Registrarse</a></li>
        <li  class="nav-item active"><a href="login.php" class="nav-link" >Ingresar</a></li>
        <li  class="nav-item active"><a href="contacto.php" class="nav-link" >Contacto</a></li>
        <li  class="nav-item active"><a href="ayuda.php" class="nav-link" >Ayuda</a></li>


        <?php
        }

        ?></div>
      </ul>
    </nav>

     
    
  
