
<?php
session_start();

if (isset($_SESSION['usuario'])) {
	if ($_SESSION['is_admin'] == 1) {
		?>
		
				<!DOCTYPE html>
		<html>
		<head>
			<title>admin</title>
			<meta name="robots" content="NoIndex, NoFollow">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="../css/admin/admin-main.css">
		</head>
		<nav>
			<div class="navegador">
			<a href="admin_home.php">Home</a>
			<a href="admin_mails.php">Mails</a>
			<a href="usuarios.php">Usuarios</a>
			<a href="admin-publicaciones.php">Publicaciones</a>
			<a href="admin-categorias.php">Categorias</a>
			<a href="../logout.php">Salir</a>
			<a href="../index.php" style="float: right; margin-right: 120px;">VIRTUATIENDA</a>
		</div>
		</nav>
<?php
	}else{
		?>
<div class="forbbiden" style="width: 80%; margin: 50px auto;">
	<img src="../imagenes/forbiden.gif" alt="Prohibido el ingreso" style="border-radius: 5px"><br>
	<a href="../index.php" style="float: right; font-size: 1.5em; margin-right: 100px;padding: 20px;">Continuar-></a>
</div>

<?php	
	}
}else{
	header('location:../login.php');

}
?>



