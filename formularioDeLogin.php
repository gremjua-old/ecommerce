<?php
$errores = [];
$usuarioIngresado = '';

if($_POST){
  if(empty($_POST['usuario'])){
    $errores['usuario'] = "El usuario no esta escrito";
  }

if($_POST){
  if(empty($_POST["contrasenia"])){
    $errores["contrasenia"] = "Contraseña incorrecta";
  }
}
$usuarioIngresado = $_POST['usuario'];

  if(empty($errores)){
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];

    $login = [
      "usuario"=> $usuario,
      "contrasenia"=> password_hash($contrasenia, PASSWORD_DEFAULT),
    ];
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


   </head>
   <body>
     <div class="container">
       <form class="" action="formularioDeLogin.php" method="post">
       <div class="form-group">

     <h1>Login</h1>
     <p>
       <label for="usuario"> Usuario</label>
       <input type="text" class="form-control" name="usuario" value="<?= $usuarioIngresado ?>">
       <?= $errores["usuario"] ?? '' ?>
     </p>

     <p>
       <label for="contrsenia">Contraseña</label>
       <input type="password" class="form-control" name="contrasenia" value="">
       <?= $errores["contrasenia"] ?? '' ?>

     </p>

     <p>
       <button type="submit" class="btn btn-primary" name="button">Enviar</button>

     </p>



   </div>
   </form>
 </div>

   </body>
 </html>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
