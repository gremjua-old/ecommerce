
<!DOCTYPE html>
<?php
$errores = [];
$usuarioIngresado = '';
$nombreIngresado = '';
$apellidoIngresado = '';
$telefonoIngresado = '';
$emailIngresado = '';
$passwordIngresado = '';
$confirmarIngresado = '';


  if ($_POST){
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmar = $_POST["confirmar"];

if($_POST){
  if(empty($_POST["usuario"])){
    $errores["usuario"]="Usuario incorrecto";
  }
  if(empty($_POST["password"])){
    $errores["password"]="Contraseña incorrecta";
  }
  if(empty($_POST["nombre"])){
    $errores["nombre"]="Escriba su nombre";
  }
  if(empty($_POST["apellido"])){
    $errores["apellido"]="Escriba su apellido";
  }
  if(empty($_POST["telefono"])){
    $errores["telefono"]="Escriba su telefono";
  }
  if(empty($_POST["email"])){
    $errores["email"]="Escriba su email";
  }
  if(empty($_POST["confirmar"])){
    $errores["confirmar"]="Contraseña incorrecta";
  }
}
    $usuario = [
      "nombre"=> $nombre,
      "Contrasenia"=> password_hash($password, PASSWORD_DEFAULT),
      "apellido"=> $apellido,
      "email"=> $email,
      "telefono"=> $telefono,
      "password"=> $password,
    ];

    $usuario = json_encode($usuario);

    file_put_contents("usuarios.json", $usuario);


  }
  ?>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="FormularioDeRegistro.css">
  </head>
  <body>
    <div class="container">

    <form class="" action="formularioDeRegistro.php" method="post">
      <div class="form-group">

      <h1 class="titulo">Registrarse</h1>

      <p>
        <label for="usuario">Usuario:</label>
        <input type="text" class="form-control" name="usuario" placeholder="" value="<?= $usuarioIngresado ?>">
         <?= $errores["usuario"] ?? '' ?>
      </p>

      <p>
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Escribi tu nombre" value="<?= $nombreIngresado ?>">
         <?= $errores["nombre"] ?? '' ?>
      </p>

      <p>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class="form-control" placeholder="Escribi tu apellido" value="<?= $apellidoIngresado ?>">
         <?= $errores["apellido"] ?? '' ?>
      </p>

    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="you@example.com" value="<?= $emailIngresado ?>">
       <?= $errores["email"] ?? '' ?>
    </p>

    <p>
      <label for="Teléfono">Teléfono:</label>
      <input type="Teléfono" name="telefono" class="form-control" placeholder="" value="<?= $telefonoIngresado ?>">
       <?= $errores["telefono"] ?? '' ?>
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="" value="<?= $passwordIngresado ?>">
       <?= $errores["password"] ?? '' ?>
    </p>

    <p>
      <label for="confirmar">Confirmar Password</label>
      <input type="password" class="form-control" name="confirmar" value="<?= $confirmarIngresado ?>">
       <?= $errores["confirmar"] ?? '' ?>
    </p>

    <p>
      <button type="submit" name="" class="btn btn-primary" >Enviar</button>
    </p>

  </div>
  </form>
</div>

  </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
