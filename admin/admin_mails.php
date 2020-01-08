<?php
include("../mails_templates/mail_conocenos.php");
include("admin-header.php");
if ($_SESSION['is_admin'] == 1) { ?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/admin/admin_mails.css">

<div class="container">
	
	<h3>Mail nuevo</h3>


	<table>

	<tr>
		<td>
			<form action="../scripts/enviar_mail.php" method="POST">

	<label for="destinatario" class="etiqueta">Destino:</label><br>
	<input type="text" class="entrada" name="destinatario" placeholder="gustavovaler1978@gmail.com"><br>

	<label for="remitente" class="etiqueta">Remitente:</label><br>
	<input type="text" class="entrada" name="remitente" placeholder="info@virtuatienda.com" list="lista-correos"><br>

	<label for="mensaje_plano" class="etiqueta">Mensaje Plano:</label><br>
	<input type="text" class="entrada" name="mensaje_plano"><br>

	<label for="mensaje_html" class="etiqueta">Mensaje HTML: (archivo)</label><br>
	<input type="text" class="entrada" name="mensaje_html" placeholder="../mails_templates/..."><br>
	<br>

	<input type="reset" class="btn btn-warning">
	<input type="submit" class="btn btn-success">
</form>
<datalist id="lista-correos">
	<option value="info@virtuatienda.com"></option>
	<option value="info@virtuatienda.online"></option>
	<option value="no-reply@virtuatienda.com"></option>
	<option value="validacion@virtuatienda.com"></option>
</datalist>
</td>
<td class="opciones-mail-nuevo">
	<button>
		Seleccionar archivo Html
	</button><br>
	<button>
		Seleccionar remitente
	</button><br>
	<button>
		Seleccionar mensaje plano
	</button><br>
	<button>
		Seleccionar archivo Html
	</button><br>
</td>
</tr>
</table>





</div>







<?php
}
?>