<!DOCTYPE html>
<?php
if($_POST) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmacion = $_POST["confirmacion-password"];

    include("validacionesFormularios.php");
    agregarNuevoUsuario($nombre,$email,$password);
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1> Formulario de Registro </h1>
  <form class="" action="formularioRegistro.php" method="post">
        <div class="">
              <label for=""> Nombre </label>
              <input type="text" name="nombre" value="<?php
              if ($_POST) {
                  echo $_POST["nombre"];
              }
               ?>">
        </div>
        <?php
        if ($_POST) {
          validarCampoRequerido($nombre);
        }
        ?>
        <div class="">
            <label for=""> E-mail </label>
            <input type="email" name="email" value="<?php
            if($_POST) {
                echo $_POST["email"];
            }?>">
        </div>
        <?php
        if ($_POST) {
          validarEmail($email);
        }
        ?>
        <div class="">
            <label for=""> Constraseña </label>
            <input type="password" name="password">
        </div>
        <?php
        if ($_POST) {
          validarCampoRequerido($password);
        }
        ?>
        <div class="">
            <label for=""> Confirmar Constraseña </label>
            <input type="password" name="confirmacion-password">
        </div>
        <?php
        if ($_POST) {
          validarCampoRequerido($confirmacion);
          validarConstraseñaRegistro($password,$confirmacion);
        }
        ?>
        <div class="">
            <button type="submit" name="button"> Enviar </button>
        </div>
  </form>














  </body>
</html>
