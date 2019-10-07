<!DOCTYPE html>
<?php
if($_POST) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    include("validacionesFormularios.php");
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Formulario de Login </h1>
    <p> Hola! Ingresá tu E-mail y constraseña</p>
  <form class="" action="formularioLogin.php" method="post">
  <div class="">
  <label for=""> E-mail </label>
  <input type="email" name="email" value="<?php
  if($_POST) {
      echo $_POST["email"];
  }
   ?>">
  </div>
  <?php
  if($_POST) {
    validarCampoRequerido($email);
  }
 ?>
  <div class="">
  <label for=""> Contraseña </label>
  <input type="password" name="password">
  </div>
  <?php
  if($_POST) {
      validarCampoRequerido($password);
  }
   ?>
  <button type="submit" name="button"> Enviar </button>
  </form>
  </body>
</html>
