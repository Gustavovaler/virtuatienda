<?php 
include('admin-header.php');

if ($_SESSION['is_admin'] ==1 ) {?>

	<!--*******************************************************************-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">	
	<body>
<div class="container">
	<div class="title">
	<span>	<h3>Sección administrativa de Virtuatienda.com </h3></span><br>	
</div>
<div class="menu">
	<table>
		<tr>
			<td>
				<ul>
					<li><a href="admin_mails.php"> Enviar un mail</a></li>
					<li><a href="usuarios.php">Ver usuario</a></li>
				</ul>
			</td>
		</tr>
	</table>



</div></div>
</body>
</html>
<?php
}
?>
