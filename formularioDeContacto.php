<!DOCTYPE html>
<?php
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/46c3d61e46.js"></script>
    <link rel="stylesheet" href="FormularioDeContacto.css">


  </head>
  <body>
      <div class="container">
    <form action="/my-handling-form-page" method="post">
      <div class="form-group">
<div class="row " id ="row">
    <div class="col-sm-6 col-md-offset-3">
    <h1>Contacto</h1>
    <div>
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="user_name" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" class="form-control" id="mail" name="user_email" />
    </div>
    <div >
        <label for="msg">Message:</label>
        <textarea id="msg" class="form-control" name="user_message"></textarea>
    </div>
    <div class="button" id="row2">
        <button type="submit" class="btn btn-primary">Send your message</button>
    </div>
  </div>
</div>
  </form>

  </div>

  </div>


</div>

</body>
<footer>
<div class="row">
  <div class="col-sm-12 col-md-2">
    <h6>Locales mas cercanos</h6>
  </div>
  <div class="col-sm-12 col-md-2">
    <h6>Comunicate con nosotros</h6>
  </div>
  <div class="col-sm-12 col-md-2">
    <h6>Noticias</h6>
  </div>
  <div class="col-sm-12 col-md-2">

  </div>
  <div class="col-sm-12 col-md-2">

  </div>
  <div class="col-sm-12 col-md-2">
    <h6>Seguinos</h6>
    <ul type="none">
      <li><i class="fab fa-twitter iconos"> Twitter</i></li>
      <li><i class="fab fa-facebook-square iconos">  Facebook</i></li>
      <li><i class="fab fa-instagram iconos"> Instagram</i></li>
      <li><i class="fab fa-snapchat  iconos"> Snapchat</i></li>

    </ul>




  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <p class="ubicacion" ><i class="fas fa-map-marker-alt iconos"></i> Argentina</p>
  </div>
</div>
</footer>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
