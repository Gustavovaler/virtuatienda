<?php
include('header.php');

?>
<link rel="stylesheet" href="css/index.css">

<body>
	<?php
$sql = "SELECT * FROM vt_publicaciones";
$resultado = mysqli_query($conn,$sql);
    
     
     foreach ($resultado as $row) {
      $titulo_mod = str_replace(' ', '-', $row['titulo']);

      ?>

<div class="card" >
	
  
  <div class="card-body">
  	<img src="https://virtuatienda.com/<?php echo $row['imagen'];?>" class="card-img-top"  alt="...">
    <h5 class="card-title"><?php echo $row['titulo'];?></h5>
    <p class="card-text">$ <?php echo $row['precio'];?></p>
    <a href="../vista-item.php?ID=<?php echo $row['ID']; ?>?<?php echo $titulo_mod;?>" class="btn btn-primary">Ver Mas</a>
  </div></div>

</body>

<?php 
}
?>
