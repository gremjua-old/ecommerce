<?php

$errores = [
  "password"=>"",
  "nombre"=>"",
  "email"=>""
  ];
$nombreIngresado = '';
$emailIngresado = '';
$passwordIngresado = '';



  if ($_POST){
  if(empty($_POST["password"]) ){
    $errores["password"]="Ingrese contraseña";

  }elseif (strlen($_POST["password"])<8) {
    $errores["password"]="Contraseña invalida";
  }
  else {
    $password = $_POST["password"];
  }
  if(empty($_POST["nombre"])){
    $errores["nombre"]="Escriba su nombre";
  }else{
      $nombreIngresado = $_POST["nombre"];
  }
  if(empty($_POST["email"])){
    $errores["email"]="Escriba su email";
  }else{
      $emailIngresado = $_POST["email"];
  }

  if ($errores["password"]=="" &&   $errores["nombre"]=="" &&   $errores["email"]=="") {
    $usuario = [
      "nombre"=> $nombreIngresado,
      "password"=> password_hash($password, PASSWORD_DEFAULT),
      "email"=> $emailIngresado,
    ];
    $contenido = file_get_contents("usuarios.json");// obtengo el archivo json
    $usuarios = json_decode($contenido, true); //transformo el archivo json en un array php
    $usuarios[]= $usuario;// agrego un nuevo usuario
    $usuarios = json_encode($usuarios);//transformo el array php en un json
    file_put_contents("usuarios.json", $usuarios);//coloco el nuevo usuario en el archivo json

  }


}



  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos-formRegistro.css">
  </head>
  <body>
    <div class="container">

    <form class="" action="formularioDeRegistro.php" method="post">
      <div class="form-group">

        <div class="logo">
        <img src="img/logo.png" alt="logotipo" width="75px" height="75px">
        </div>

      <h1 class="titulo">Registrate</h1>

      <p>
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $nombreIngresado ?>">
         <?= $errores["nombre"] ?? '' ?>
      </p>



    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico" value="<?= $emailIngresado ?>">
       <?= $errores["email"] ?? '' ?>
    </p>



    <p>
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?= $passwordIngresado ?>">
       <?= $errores["password"] ?? '' ?>
    </p>



      <div class="button">
      <button  type="submit" name="" class="btn btn-primary btn-lg">
        Crear cuenta
      </button>
      </div>

      <div id="caja">
        ¿Eres miembro?
      </div>

      <a href= "formularioDeLogin.php#IniciarSesion">
        Iniciar sesion
      </a>




  </div>


  </form>
</div>

  </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
