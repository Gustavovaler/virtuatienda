<?php
include('admin-header.php');
include('../global/conexion2.php');


$sql_usuarios = 'SELECT * FROM vt_usuarios';

$resultado = mysqli_query($conn, $sql_usuarios);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">

	
<table border="1" cellpadding="5px" cellspacing="3px">
		<tr>
			<td><b>Usuario</b></td>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td>
			<td><b>Apellido</b></td>
			<td><b>Mail</b></td>
			<td><b>Admin</b></td>
			<td><b>Accion</b></td>
		</tr>
<?php
foreach ($resultado as $row ) {
	?>
			<td><?php echo $row['usuario']; ?></td>
			<td><?php echo $row['id_vendedor']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['is_admin']; ?></td>
			<td><button class="enviar_mail">Enviar mail</button></td>
		</tr>
	

<?php
}

?>

</table>
</div>