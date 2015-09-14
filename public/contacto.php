<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conéctate con nuestros tours</title>
    <meta name="description" content="Acércate, tenemos sorpresas preparadas y un paquete te está esperando, recuerda
    que puedes armar paquetes a tu medida para ti y los tuyos, no se queden sin la oportunidad de vivir esta experiencia.">
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
    <!-- Contact Us -->
    <section class="contact-us">
        <div class="container-fluid nopadding">
            <div class="col-lg-5 nopadding">
                <div class="contact-us__container">
                    <h2 class="base-white-title">Contacto</h2>
                    <h5 class="base-white-subtitle">Viajes de Gala</h5>
                    <hr class="base-white-separator">
                    <h6 class="base-white-description">Francisco Petrarca No. 133-202 Col. Chapultepec Morales, Del. Miguel Hidalgo</h6>
                    <div class="contact-us__container--email">
                        <img src="/images/ic-contact-mail.png" alt="Email Galatours">
                        <h6 class="base-white-description">
                            <a href="mailto:ventas@vdegalatours.com.mx">ventas@vdegalatours.com.mx</a>
                        </h6>
                    </div>
                    <div class="contact-us__container--phone">
                        <img src="/images/ic-contact-tel.png" alt="Teléfono Galatours">
                        <h6 class="base-white-description">+52 (55) 52 50 42 01   &nbsp;&nbsp;|&nbsp;&nbsp;  +52 (55) 52 54 65 25   &nbsp;&nbsp;|&nbsp;&nbsp;  +52 (55) 55 45 77 61</h6>
                    </div>
                    <p class="base-white-description">
                        Para mayor información, escríbenos un mensaje y a la brevedad nos pondremos en contacto.
                    </p>
                </div>
            </div>
            <div class="col-lg-7 nopadding">
                <div class="contact-us__map" id="map">
                </div>
            </div>
        </div>
    </section>
    <!-- /contactUs -->
    <?php include('html/newsletter.php'); ?>
    <?php include('html/form.php'); ?>
    <?php include('html/footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--  Custom Javascript Functions -->
    <script src="/js/navigation.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/js/map.js"></script>
    <script src="/js/map-setup.js"></script>
    <script src="/js/custom.js"></script>
  </body>
</html>
