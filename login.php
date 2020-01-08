
<?php
include('header.php');
include('global/conexion2.php');
if (isset($_GET['identificacion'])) {
  if ($_GET['identificacion'] == 'rejected') {
    ?>
  <script type="text/javascript">
    function errorpass(){
     
   var errorpass = document.getElementById('incorrect-pass');
   errorpass.style.display='block';
 }
 window.onload = errorpass;
 </script>
  <?php
  }
  if ($_GET['identificacion'] == 'nonexists') {
    ?>
    <script type="text/javascript">
      function usernonexists(){
        var usernon = document.getElementById('nonexists-user');
        usernon.style.display= 'block';
      }
      window.onload = usernonexists;

    </script>
    <?php
  }
}
?>
<title>Logueate o crear tu cuenta -  Virtuatienda - Compra y vende lo que quieras! Virtuatienda VT</title>
<link rel="stylesheet" href="css/login.css">
<div class='login'>
  <div class="incorrect-pass" id="incorrect-pass">
    Contraseña Incorrecta
  </div>
  <div class="nonexists-user" id="nonexists-user">
    El usuario no existe
  </div>
  <h2>Ingresar</h2>
  <form action="log_auth.php" method="POST">
  <input name='usuario' placeholder='Username' type='text'/>
  <input id='pw' name='pass' placeholder='Password' type='password'/>
  <div class='remember'>
    <input checked='' id='remember' name='remember' type='checkbox'/>
    <label for='remember'></label>Recordarme    
  </div>
  <input type="hidden" name="refer" value="<?php echo $_SERVER['HTTP_REFERER'];?>" >
  <input type='submit' value='Entrar'/>
  <a class='forgot' href='#'>Olvidó su contraseña?</a>
  <a class='forgot' href='registro.php'>Crear una cuenta</a></form>
</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="js/login.js"></script>