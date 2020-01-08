<?php
include('admin-header.php');
include('../global/conexion2.php');

if (isset($_POST['submit-id'])) {
	$v_id = $_POST["vendedor_id"];
	$sql1="SELECT * FROM vt_publicaciones WHERE ID_vendedor='$v_id'";
}else{
	if (isset($_POST['submit-user'])) {
		$filtro_user = $_POST['usuario'];
		$sql1="SELECT * FROM vt_publicaciones WHERE ID_vendedor='$filtro_user'";
	}else{
		$sql1="SELECT * FROM vt_publicaciones";
	}
	
}


?>
<div class="container">

<div class="filtros">
	<h5>Filtrar por vendedor:</h5>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<div class="form-row">
	<div class="form-group col-md-2">
	Id: <input type="numbrer" name="vendedor_id" class="form-control" > <input type="submit" value="Filtrar por ID" class="btn btn-info" name="submit-id">
</div>
<div class="form-group col-md-4">
	Usuario: <input type="text" name="usuario" class="form-control"><input type="submit" value="Filtrar por Usuario" class="btn btn-info" name="submit-user">
	</div></div><br>
</form>
<hr>

</div>

	<table border="0" cellpadding="5px">
		<tr>
			<td><b>ID</b></td>
			<td><b>Foto</b></td>
			<td><b>Titulo</b></td>
			<td><b>Vendedor</b></td>
			<td><b>Precio</b></td>
			<td><b>Estado</b></td>
			
		</tr>
		<?php
		

		$resultado = mysqli_query($conn, $sql1);

		foreach ($resultado as $row) {		
		?>
	<tr>
			<td><?php echo $row['ID']; ?></td>
			<td><a href="../vista-item.php?ID=<?php echo $row['ID_vendedor'];?>"><img src="../<?php echo $row['imagen']; ?>" alt="" width='50px'></a></td>
			<td><?php echo $row['titulo']; ?></td>
			<td><a href=""> <button class="btn btn-outline-success"><?php echo $row['ID_vendedor'];?> - Ver</a></button></td>
			<td><?php echo $row['precio']; ?></td>
			<td><?php echo $row['estado']; ?></td>
			<td><button class="btn btn-warning">Editar</button></td>			
			<td><button class="btn btn-secondary">Susupender</button></td>
			<td><button class="btn btn-primary">Reanudar</button></td>
			<td><a href="../eliminar-publicacion.php?ID=<?php echo $row['ID']; ?>&titulo=<?php echo $row['titulo'];?>&imagen=<?php echo $row['imagen']; ?>"><button class="btn btn-danger">Eliminar</button></a></td>

		</tr>


	<?php } ?>
	</table>



	
</div>