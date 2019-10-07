<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Domine|Roboto&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
      <header>
          <nav class="navbar navbar-expand-md  navbar-light">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Quienes Somos</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
                  </ul>
              </div>
              <div class="barra-busqueda-lg">
                  <form class="form-inline" action="index.html" method="post">
                      <input type="text" name="busquedas" placeholder="Buscar...">
                  </form>
              </div>
              <div class="login">
                  <a href="#">Únete o inicia sesión</a>
              </div>
          </nav>
      </header>
      <div class="container">
          <div class="barra-busqueda-sm">
            <form class="form-inline" action="index.html" method="post">
                <input type="text" name="busquedas" placeholder="Buscar...">
            </form>
          </div>
          <article class="">
              <div class="">
                  <div class="bienvenida">
                      <h1>Bienvenido <?= $_SESSION['usuario']['nombre'] ?? '' ?> a nuestro primer E-commerce</h1>
                      <h5>Enviamos más de 40 millones de productos a todo el país</h5>
                  </div>
                  <div class="oferta">
                      <h4>Aprovecha el 40% de descuento en productos seleccionados</h4>
                  </div>
              </div>
          </article>
          <section class="categorias">
              <div class="">
                  <div class="categoria-1">
                      <a href="#">Novedades</a>
                  </div>
                  <div class="categoria-2">
                      <a href="#">Productos Destacados</a>
                  </div>
                  <div class="categoria-3">
                      <a href="#">Ofertas</a>
                  </div>
              </div>
          </section>
          <section class="productos">
              <div class="caja-productos">
                  <div class="producto-1">
                      <img src="img/img-producto-1.jpg" alt="">
                      <h6>Producto 1</h6>
                  </div>
                  <div class="producto-2">
                      <img src="img/img-producto-2.jpg" alt="">
                      <h6>Producto 2</h6>
                  </div>
                  <div class="producto-3">
                      <img src="img/img-producto-1.jpg" alt="">
                      <h6>Producto 3</h6>
                  </div>
                  <div class="producto-4">
                      <img src="img/img-producto-2.jpg" alt="">
                      <h6>Producto 4</h6>
                  </div>
              </div>
          </section>
          <div class="titulo-destacados">
              <h5>Productos Destacados</h5>
          </div>
          <section class="destacados">
              <div>
                  <img src="img/img-producto-1.jpg" alt="">

              </div>
              <div>
                <img src="img/img-producto-2.jpg" alt="">

              </div>
              <div>
                <img src="img/img-producto-1.jpg" alt="">

              </div>
          </section>
          <footer>
              <div class="contacto-redes">
                  <ul>
                      <li>Contacto</li>
                      <li><a href="https://www.facebook.com/">Fecebook</a></li>
                      <li><a href="https://www.Twitter.com/">Twitter</a></li>
                      <li><a href="https://www.Instragram.com/">Instragram</a></li>
                  </ul>
              </div>
              <div class="medios-pagos">
              <ul>
                <li>Medios de Pago</li>
                <li>Efectivo</li>
                <li>Tarjetas de crédito</li>
                <li>Tarjetas de débito</li>
              </ul>
              </div>
          </footer>

















      </div>



































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
