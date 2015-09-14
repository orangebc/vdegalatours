<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viajes de Gala</title>
    <meta name="author" content="Orange Boutique Creativa">
    <meta name="description" content="Viajes de Gala se ha especializado en todas las áreas de la
      industria de viajes, seleccionando los servicios de más alta calidad partiendo de las necesidades de
      nuestros clientes.">
    <meta name="keywords" content="viajes, gala, viajesdegala, vdegalatours, galatours, tours, visit, mexico,
    tours, circuitos, modulares, recorridos, viajes grupales, grupos, viajes, agencia, visita guiadas, como viajar mexico,
    republica mexicana, conoce.">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php include('html/favicon.php') ?>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('html/header.php') ?>
    <?php include('html/navigation.php') ?>
    <!-- Video -->
    <div class="video__container">
        <video controls autoplay="true" width="100%" height="auto">
            <source src="/video/video.mp4" type="video/mp4">
            <source src="/video/video.ogg" type="video/ogg">
            Tu navegador no soporta éste tipo de videos, por favor <a href="http://google.com/chrome">actualiza</a> y regresa pronto! :)
        </video>
    </div>
    <!-- /video -->
    <!-- Discover -->
    <div class="discover">
      <div class="container-fluid nopadding">
        <div class="col-lg-6 col-md-6 col-sm-6 nopadding">
          <h2 class="discover__title">Descubre la grandeza de México, visita:</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 nopadding">
          <figure class="discover__visit-mexico">
            <a href="http://visitmexico.com/es" target="_blank">
              <img src="/images/visitmexico-vgala.png" alt="Visit México">
            </a>
          </figure>
        </div>
      </div>
    </div>
    <!-- /discover -->
    <!-- How to travel -->
    <section class="howToTravel">
      <div class="container-fluid nopadding">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
          <figure class="howToTravel__tours">
            <img src="/images/modulares-vgala.jpg" alt="Tours Modulares">
            <figcaption class="howToTravel__tours-caption">
              <h2 class="howToTravel__tours-caption--title"><small>Tours</small>Modulares</h2>
              <a href="como-viajar/" class="howToTravel__tours-caption--button">¡Conócelos!</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
          <figure class="howToTravel__container">
              <img src="/images/fondoazul.jpg" alt="fondoazul">
              <figcaption>
              <h2 class="howToTravel__title">
                <small>¿Cómo Viajar</small> México?
              </h2>
              </figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
          <figure class="howToTravel__tours">
            <img src="/images/circuitos-vgala.jpg" alt="Circuitos Especializados">
            <figcaption class="howToTravel__tours-caption">
              <h2 class="howToTravel__tours-caption--title">Circuitos<small>Especializados</small></h2>
              <a href="como-viajar/" class="howToTravel__tours-caption--button">¡Conócelos!</a>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>
    <!-- /how to travel -->
    <!--  Main Services -->
    <section class="main-services">
      <div class="container-fluid">
        <h2 class="base-title"><small>Nuestros</small>Servicios</h2>
        <ul class="list-inline">
          <li>
            <a href="servicios/">
              <img src="/images/1serv-vgala2.png" class="main-services__icon" alt="Vuelo">
              <h5 class="main-services__name">Vuelo</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/2serv-vgala2.png" class="main-services__icon" alt="Hoteles">
              <h5 class="main-services__name">Hoteles</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/3serv-vgala2.png" class="main-services__icon" alt="Traslados">
              <h5 class="main-services__name">Traslados</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/4serv-vgala2.png" class="main-services__icon" alt="Tours">
              <h5 class="main-services__name">Tours</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/5serv-vgala2.png" class="main-services__icon" alt="Guías">
              <h5 class="main-services__name">Guías</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/6serv-vgala2.png" class="main-services__icon" alt="Especiales">
              <h5 class="main-services__name">Especiales</h5>
            </a>
          </li>
          <li>
            <a href="servicios/">
              <img src="/images/7serv-vgala2.png" class="main-services__icon" alt="Entradas">
              <h5 class="main-services__name">Entradas</h5>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- /main services -->
    <!-- Main Newest -->
    <section class="main-newest">
        <div class="container-fluid">
            <div class="main-newest__container">
            <h2 class="base-title"><small>Lo</small>Nuevo</h2>
            <p class="base-description">Seguimos innovando y diseñando experiencias para ti. <br>
              Queremos que tu viaje a México sea único y especial y cada año
              encontramos nuevas opciones para recorrer todas las riquezas del país.</p>
            <a href="lo-nuevo/" class="base-button">Ver Más <span class="fa fa-arrow-right"></span></a>
            </div>
        </div>
    </section>
    <!-- /main-newest -->
    <!-- Main Services -->
    <section class="main-about">
      <div class="container">
        <h2 class="base-title">Nosotros</h2>
        <p class="base-description"><strong>Viajes de Gala</strong> se ha especializado en todas las áreas de la
          industria de viajes, seleccionando los servicios de más alta calidad partiendo de las necesidades de
          nuestros clientes. México y sus riquezas nos permiten entregar una gran diversidad de productos, mayor seguridad,
          bienestar y atención a nuestros clientes.</p>
        <h2 class="base-title"><small>De México al Mundo</small></h2>
        <p class="base-description">Nuestra constante y amistosa relación con operadores receptivos a nivel mundial,
          nos permite brindar la misma calidad a nuestros clientes que viajan fuera de México, ofreciendo una amplia
          variedad de entretenimiento y diversión.</p>
        <a href="nosotros/" class="base-button">Leer Más</a>
      </div>
    </section>
    <!-- /main services -->
    <?php include('html/newsletter.php'); ?>
    <?php include('html/form.php'); ?>
    <?php include('html/footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--  Custom Javascript Functions -->
    <script src="/js/navigation.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-67595600-1', 'auto');
    ga('send', 'pageview');
    </script>
  </body>
</html>
