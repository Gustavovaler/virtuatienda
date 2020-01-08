<?php
include('admin-header.php');
include('../global/conexion2.php');


if ($_SESSION['is_admin'] ==1 ) {

	if (isset($_GET['result'])) {
		if ($_GET['result'] == "created-sub") {
			echo "<script> alert ('Subcategoria Creada Correctamente !!'); </script>";
		}else{
			echo  "<script> alert ('Subcategoria no se creo !!'); </script>";
		}
	}

	if(isset($_POST['submit-sub'])){
		$categoria_selec = $_POST['categoria-seleccionada'];
		$sub_categoria_1_nueva = $_POST['sub_categoria_1_nueva'];
		$sql_insertar_subCategoria = "INSERT INTO vt_sub_categoria_1 (sub_categoria_1, categoria) VALUES ('$sub_categoria_1_nueva','$categoria_selec')";
		$query = mysqli_query($conn,$sql_insertar_subCategoria);
		if ($query) {
			header("location:admin-categorias.php?result=created-sub");

		}else{
			echo "error";
		}
	}

	if (isset($_POST['submit-cat']) && $_POST['nueva_categoria'] != "") {
		$nueva_cat = $_POST['nueva_categoria'];
		$sql_crear_cat = "INSERT INTO vt_categorias (categoria) VALUES ('$nueva_cat')";
		$consulta = mysqli_query($conn, $sql_crear_cat);
		if ($consulta) {
			header("location:admin-categorias.php?result=created-cat");
		}else{
			echo "error";
		}
	}


	?>

	<!--*******************************************************************-->





	<body>
<div class="container">

<h3>Categorias:</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
	<label for="categoria">Crear nueva categoria  </label><br>
	<input type="text" name="nueva_categoria" required class="form-control"><br>
	<input type="submit" value="Crearcategoria" class="btn btn-success" name="submit-cat">
</form>


<hr>

<h3>Sub categorias lvl 1:</h3>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	<label for="sub_categoria_1">Seleccione la categoria </label><br>
    <select select multiple class="form-control" id="categoria-selec" name="categoria-seleccionada">
    	<?php 
    	$sql_cat = "SELECT * FROM vt_categorias";
    	$resultado = mysqli_query($conn, $sql_cat);
    	foreach ($resultado as $row) {  ?>

    		<option value="<?php echo $row['ID']; ?>" name="categoria-seleccionada"><?php echo $row['categoria']; ?></option>
    	<?php
    	}
    	?>
    	
		
	</select><br>
	<label for="sub_categoria_1">Nombre nueva  Sub-categoria 1 </label><br>
	<input type="text" name="sub_categoria_1_nueva" required class="form-control"><br>
	
	<input type="submit" value="Crearcategoria" class="btn btn-success" name="submit-sub">
</form>
<hr>
</div>
</body>
</html>
<?php
}
?>