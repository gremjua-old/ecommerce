<?php

require_once("./utils/funciones.php");

$secciones = [
    ['nombre' => 'Home', 'url' => './home.php'],
    ['nombre' => 'Productos', 'url' => './detalleDeProducto.php'],
    ['nombre' => 'FAQ', 'url' => './faq.html'],
    ['nombre' => 'Contacto', 'url' => './formularioDeContacto.php']
  ];

?>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Ecom</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php foreach($secciones as $seccion):?>
                <a class="nav-item nav-link <?php if(strpos($seccion['url'],nombreDePagina())!==FALSE):?>active<?php endif;?>" href="<?=$seccion['url']?>"><?=$seccion['nombre']?>
                <?php if(strpos($seccion['url'],nombreDePagina())!==FALSE):?><span class="sr-only">(current)</span><?php endif;?> </a>
            <?php endforeach;?>
        </div>
      </div>
    </div>
    
  </nav>
</header>

