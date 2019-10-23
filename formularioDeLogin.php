<?php
session_start();

$errores = [];
$usuarioEncontrado = null;

if($_POST){
  if(empty($_POST['email'])){
    $errores['email'] = "El usuario no esta escrito";
  }

  if(empty($_POST["contrasenia"])){
    $errores["contrasenia"] = "Contraseña incorrecta";
    echo "Contraseña incorredta";
  }

  if(empty($errores)){
    $contenido = file_get_contents("usuarios.json");// obtengo el archivo json
    $usuarios = json_decode($contenido, true); //transformo el archivo json en un array php

    foreach ($usuarios as $usuario) {
      if($_POST["email"]== $usuario["email"] && password_verify ( $_POST["contrasenia"] ,  $usuario["contrasenia"] ) ){
        $_SESSION['usuario'] = $usuario;
        header('location: home.php');
        break;
      }
    }
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
     <link rel="stylesheet" href="css/formDeLogin.css">

   </head>
   <body>

     <div class="container">
       <form class="" action="formularioDeLogin.php" method="post">
       <div class="form-group">

         <div class="logo">
         <img src="img/logo.png" alt="logotipo" width="75" height="75">
         </div>

     <h1>Iniciar Sesion</h1>
     <div>
       <label for="usuario"> Usuario</label>
       <input type="text" class="form-control" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Dirección de correo electrónico">
       <?= $errores["usuario"] ?? '' ?>
     </div>

     <div>
       <label for="contrsenia">Contraseña</label>
       <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
       <?= $errores["contrasenia"] ?? '' ?>
     </div>

   </div>
 <div class="form-group row mx-auto leyenda">
  <div class="col-md-12 mx-auto leyenda center-block">

<div class="row" id="olvidaste">
  <div class="col-6">
    <input type="checkbox" name="Mantener" value="Mantener mi sesión iniciada">
  Mantener mi sesión iniciada
  </div>
  <div class="col-6">
  ¿olvidaste la contraseña?
  </div>
</div>

<div id="button">
     <button  type="submit" name="" class="btn btn-primary btn-lg">
       Iniciar Sesión
     </button>
</div>

<div id="caja" class="row" >
  <div class="col-6" >
    ¿No tienes cuenta?
  </div>
  <div class="col-6">
  <a href= "formularioDeRegistro.php#Registrate">
    Registrate
  </a>
  </div>
</div>


   </div>

 </div>
   </form>
 </div>
</body>
</html>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
