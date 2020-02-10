<?php

include('header.php');
include('global/conexion2.php');
include('barra_de_busqueda.php');
?>

<script
      src="https://code.jquery.com/jquery-3.2.0.min.js"
      integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
      crossorigin="anonymous"></script>
      <script src="js/index.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilos.css">

<title>Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<meta name="description" content="Compra y vende tus productos de manera facil y sencilla. Sin comisiones ni engaños. El mejor sitio para comprar lo que querés con tus medios de pago preferidos ">

<link rel="stylesheet" href="css/index.css" id="tema">

<div class="slideshow">
  <div class="slider">
    <div class="li">
      <img src="imagenes/site/descarga.jpg" alt="">
    </div>
    <div class="li">
      <img src="imagenes/site/descarga1.jpg" alt="">
    </div>
    <div class="li">
      <img src="imagenes/site/descarga2.jpg" alt="">
    </div>
    <div class="li">
      <img src="imagenes/site/descarga3.jpg" alt="">
    </div>
  <div>

  <ol class="paginacion">
    
  </ol>
  <div class="left">
    <span class="fa fa-chevron-left"></span>
  </div>

  <div class="right">
    <span class="fa fa-chevron-right"></span>
  </div>
</div>
</div></div>
<main>
 <br>
<br>
<div class="container">

 <!-- ********************************************************************-->
  <div class="noticias-destacadas">
  <div class="noticias-destacadas-item">
     <div class="noticias-destacadas-content">
       <img src="imagenes/noticias-mini.png" alt="">
       <p>Sin comisiones ni gastos</p>
     </div>
   </div>
    <div class="noticias-destacadas-item">
     <div class="noticias-destacadas-content">
       <img src="imagenes/noticias-mini.png" alt="">
       <p>Crea tu propio negocio</p>
     </div>
   </div>
   <div class="noticias-destacadas-item">
     <div class="noticias-destacadas-content">
       <img src="imagenes/noticias-mini2.png" alt="">
       <p>Vende tus produtos facilmente</p>
     </div>
   </div>
   <div class="noticias-destacadas-item">
     <div class="noticias-destacadas-content">
       <img src="imagenes/noticias-mini.png" alt="">
       <p>Compra al mejor precio</p>
     </div>
   </div>
   <div class="noticias-destacadas-item">
     <div class="noticias-destacadas-content">
       <img src="imagenes/noticias-mini.png" alt="">
       <p>Planes de cuotas</p>
     </div>
   </div>
  </div>
<!--
  ****************************************************************
  ****************************************************************-->

  <div class="presentacion-art">


    <?php
    $sql = "SELECT ID,precio,titulo,imagen,ubicacion FROM vt_publicaciones";
    $contador = 1;

     $resultado = mysqli_query($conn,$sql);
    
     
     foreach ($resultado as $row) {
      $titulo_mod = str_replace(' ', '-', $row['titulo']);

      ?>
      
      <div class="card" id="card">
        <div class="card-title">
          <p><?php echo $row['titulo'];?> </p>
       </div>
       <div class="card-img" id="card-img"><a href="vista-item.php?ID=<?php echo $row['ID']; ?>?<?php echo $titulo_mod;?>">

         <img src="<?php echo $row['imagen'];?>" alt=""></a>
       </div>
       <div class="card-price">
         ars/$ <?php echo $row['precio'];?>
       </div>
       <div class="card-descripcion" id="card-descripcion">
        <span><?php echo ucfirst($row['ubicacion']) ;?></span>
         
       </div>
    </div>
  
  <?php
      if ($contador == 10 || $contador == 15) {
    ?>
      <div class="noticias-destacadas2" id="banner"><img src="imagenes/portada2.jpg" alt=""></div>
      <?php 
    }
      $contador++;

     }
?>
<!--      <script>
    document.getElementsByClassName("card").onmouseout = function(){
        this.mouseOut()};


      document.getElementsByClassName("card").onmouseout = function(){
        this.mouseOut()

</script> -->
    <script>

     
     function mouseOver(){
     document.getElementsByClassName("card-descripcion").style.display = "block";
     console.log('block');
     }

     function mouseOut(){
     document.getElementsByClassName("card-descripcion").this.style.display = "none";
     } 
    </script>
   
    
      
        
       
    
 
<!--  **********************BANNER CENTRAL*******************************************************
  **********************              *******************************************************-->


<!--********************************************************************************************
********************************************************************************************-->


<!--###################################################################################################################
-->

</div>
</main>   
<section>
  <div class="btn-pre-div">
   <input type="button" class="btn-pre" value="Mas Info"> 
  </div>
 
   <div class="pre-footer">
      
    <p> Desde tu casa y con solo unos pequeños pasos podes hacer gran diferencia. Compra y vende con las mejores condiciones tus productos nuevos o usados. En <a href="http://virtuatienda.com">VIRTUATIENDA</a> vender no cuesta nada. Solo haz clic en <a href="vender.php">VENDER</a> y podes ofrecer sin ningun costo o comision calquier producto o servicio que tengas para ofrecer. </p>
    <p>En un futuro bastante proximo estaremos brindandote nuevos servicios y funcionalidades para que puedas comprar al mejor precio y con todos los medios de pago. Vas a poder disfrutar de las promociones de tu tarjeta de credito, pagar en cuotas sin interes y  tener al instante ese producto que tanto deseabas.</p>
    <p>En <a href="http://virtuatienda.com">VIRTUATIENDA</a>  estamos trabajando para vos !. Todo lo que deseamos es que tengas una experiencia amigable tanto vendiendo como comprando. Si sos vendedor, estamos preparando algo fabuloso. Reserva tu lugar como vendedor fundador y los beneficios van a ser especiales para vos !!</p>
   </div>
 </section> 

<?php
include('footer.php');
?>


</body>
</html>