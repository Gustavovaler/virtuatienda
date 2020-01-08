<?php
session_start();

if (isset($_SESSION['usuario'])) {
	if ($_SESSION['is_admin'] == 1) {
		header('location:admin_home.php');
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
