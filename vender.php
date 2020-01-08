<?php
include('header.php');
include('global/conexion2.php');

if(!isset($_SESSION['usuario'])){
   header("Location:login.php");
}
?>
<title>Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<meta name="description" content="Publica sin comision cualquier producto que quieras vender entan solo unospocos clics. Virtuatienda">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="css/menu-resp.css">-->
<link rel="stylesheet" href="css/registro.css">
<script src='js/vender.js'></script>
<div class="container">

	<!--***************************************************************************************-->

	<h2 id="titulo-cat">Categoria: <br> <?php echo $_GET['cat']; ?></h2>
	
<form action="vender_script.php" method="POST" enctype="multipart/form-data"><br><br>
	<input type="hidden"  name="categoria" value="<?php echo $_GET['cat']; ?>">


	 <!-------------------- SUB CATEGORIA -------------------------->

	 <label for="">Sub Categoria</label><br>

<?php
$categoria = $_GET['categoria_id'];

$sql2 = "SELECT * FROM vt_sub_categoria_1 WHERE categoria=$categoria";

$resultado2 = mysqli_query($conn, $sql2);?>
<select name="sub_categoria_1" id="sub_categoria_1" multiple class="form-control">
	<?php

 foreach ($resultado2 as $cat_sub) {?>
   <option value="<?php echo $cat_sub['sub_categoria_1']; ?>"><?php echo $cat_sub['sub_categoria_1']; ?></option>
 	
 <?php } ?>
</select><br>

	<label for="" class="etiqueta">Titulo (Hasta 60 caracteres)</label><br>
	<input type="text" class="form-control" name="titulo" maxlength="60" required><br>
	
	<!--<label for="" class="etiqueta">Vendedor</label><br>
	<input type="text" class="entrada" name="vendedor"><br>-->

	<label for="" class="etiqueta">Descripcion ( Máximo 300 caracteres)</label><br>
	<textarea name="descripcion" id="" cols="50" rows="5" required maxlength="300" class="form-control"></textarea><br>

		


	<label for="" class="etiqueta">Condicion</label><br><br>

	<div class="condicion" >

	<input type="radio" name="condicion" value="Usado" required>Usado
	<input type="radio" name="condicion" value="Nuevo" required>Nuevo

</div>
<br>
	<label for="" class="etiqueta">Cantidad</label><br>
	<input type="number"  name="cantidad" required class="form-control"><br>


	<label for="" class="etiqueta">Precio</label><br>
	<input type="number" class="form-control" name="precio" required><br>


	<label for="" class="etiqueta">Imagen</label><br>
	<input type="file" class="input-reg" name="foto[]" required><br>
	

<div class="fotoextra1">
	<label for="" class="etiqueta">Imagen</label><br>
	<input type="file" class="input-reg2" name="foto[]"><br>
</div>
<div class="fotoextra2">
	<label for="" class="etiqueta">Imagen</label><br>
	<input type="file" class="input-reg3" name="foto[]" ><br>
</div>
<div class="fotoextra3">
	<label for="" class="etiqueta">Imagen</label><br>
	<input type="file" class="input-reg4" name="foto[]" ><br>
</div>

<div id="agregarFoto" class="btn">
		Agregar otra foto
	</div><br>
<div class="btn-submit">
	<input type="submit" value="CREAR PUBLICACION" name="submit" class="btn btn-success btn-lg btn-block"></div>
</form>
</div>
<?php 
include('footer.php');
?>
</body>
</html>