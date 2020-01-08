<?php

include("header.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/registro2.css">

<title>Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<?php
if (isset($_GET['usr']) == 'preexistente') {
	?>
	<h1 class="userexists" style="color: white; background: teal; padding-left: 35%"> El usuario ya existe </h1>


	<?php
}
?>

<section>
	<div class="container" style="width: 60%">
		<h1 class="registro-title">Crear una cuenta</h1>
	<div class="col">
		<form action="registro_script.php" class="" method="POST" enctype="multipart/form-data">

		<label for="nombre-in" class="" id="label1" >Nombre <abbr title="Este campo es obligatorio">*</abbr> </label><span> Hasta 100 letras mayúsculas y/o minúsculas</span><br>
		<input type="text" name="nombre-in" id="nombre-in" class="form-control inp" required pattern="^[a-zA-Z ]*$"><br>

		<label for="apellido-in" class="">Apellido <abbr title="Este campo es obligatorio">*</abbr></label><span> Hasta 100 letras mayúsculas y/o minúsculas</span><br>
		<input type="text" name="apellido-in" id="apellido-in"class="form-control inp" required pattern="^[a-zA-Z ]*$"><br>

		<label for="email-in" class="email-lbl">Email <abbr title="Este campo es obligatorio">*</abbr></label><span>Email válido</span><br>
		<input type="email" name="email-in" id="email-in"class="form-control inp" required><br>

		<label for="telefono-in" class="telefono-lbl">Telefono</label><abbr title="Este campo es obligatorio">*</abbr><span>Solo números.</span><br>
		<input type="number" name="telefono-in" id="telefono-in"class="form-control inp" required ><br>

		<label for="provincia-in" class="provincia-lbl">Provincia</label><span> Hasta 100 letras mayúsculas y/o minúsculas</span><br>
		<input type="text" name="provincia-in" id="provincia-in"class="form-control inp" required pattern="^[a-zA-Z ]*$"><br>

		<label for="ciudad-in" class="ciudad-lbl">Ciudad</label><span> Hasta 150 letras mayúsculas y/o minúsculas</span><br>
		<input type="text" name="ciudad-in" id="ciudad-in"class="form-control inp" required pattern="^[0-9a-zA-Z ]*$"><br>

		<label for="" class="form-reg-lbl">Dirección:</label><span> Hasta 150 letras mayúsculas y/o minúsculas y/o numeros</span><br>
		<input type="text" name="direccion-in" id="dreccion-in"class="form-control inp" required pattern="^[0-9a-zA-Z ]*$"><br>

		<label for="" class="form-reg-lbl">DNI</label><span> Hasta 8 numeros</span><br>
		<input type="number" name="dni-in" id="dni-in"class="form-control inp" required><br>

		<label for="" class="form-reg-lbl">Usuario:</label><span> Hasta 100 letras mayúsculas  y/o minúsculas y numeros</span><br>
		<input type="text" name="usuario-in" id="usuario-in"class="form-control inp" required pattern="^[0-9a-zA-Z ]*$" ><br>

		<label for="" class="form-reg-lbl">Contraseña: </label><span> Entre 8 y 14 caracteres combinando letras y numeros</span><br>
		<input type="password" name="password-in" id="password-in"class="form-control inp" required minlength="8" max="14"><br>

		<label for="" class="form-reg-lbl">Confirmar contraseña:</label><span>Debe coincidir con la contraseña ingresada</span><br>
		<input type="password" name="re-password-in" id="re-password-in"class="form-control inp" required><br>

		<label for="">Acepto los terminos y condiciones</label>
		<input type="checkbox" name="" required><br>
		<a href="archivos/terminos_y_condiciones.pdf" target="blank">Terminos y condiciones </a>  - <a href="archivos/terminos_y_condiciones.pdf" download>  Descargar</a><br>

		<input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar Formulario" id="btn-submit-reg">			
		</form> 
	</div><br><br>

	</div>
</section>
<?php 
include('footer.php');
?>