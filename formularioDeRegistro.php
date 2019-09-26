
<!DOCTYPE html>
<?php

  if ($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contrasenia = $_POST["contrasenia"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    $usuario = [
      "nombre"=> $nombre,
      "Contrasenia"=> password_hash($contrasenia, PASSWORD_DEFAULT),
      "apellido"=> $apellido,
      "email"=> $email,
      "telefono"=> $telefono,
    ];
    $usuario = json_encode($usuario);
    var_dump($usuario);

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

    <form class="" action="index.html" method="post">
      <div class="form-group">

      <h1 class="titulo">Registrarse</h1>
      <p>
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Tu nombre" value="">

      </p>

      <p>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class="form-control" placeholder="Tu apellido" value="">

      </p>

    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="you@example.com" value="">

    </p>

    <p>
      <label for="Teléfono">Teléfono:</label>
      <input type="Teléfono" name="Teléfono" class="form-control" placeholder="" value="">

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