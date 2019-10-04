
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos-home.css">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Domine|Roboto&display=swap" rel="stylesheet">
    <?php require_once("./common/bootstrapLink.php")?>
    <title>Home</title>
  </head>
  <body>
      <?php include_once("./common/header.php")?>
      <div class="container">
          <div class="barra-busqueda-sm">
            <form class="form-inline" action="index.html" method="post">
                <input type="text" name="busquedas" placeholder="Buscar...">
            </form>
          </div>
          <article class="">
              <div class="">
                  <div class="bienvenida">
                      <h1>Bienvenido a nuestro primer E-commerce</h1>
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

































  </body>
</html>
