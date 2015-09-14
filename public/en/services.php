<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php include('html/favicon.php') ?>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
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
    <!--  Services -->
    <section class="services">
        <h2 class="base-title">Services</h2>
        <div class="display-flex">
            <article class="services__item services__bg--blue">
                <h3 class="base-white-title">Great Variety <small>of services</small></h3>
                <hr class="base-white-separator">
                <p class="base-white-description">Our priority is to take the experience to the limit, enriching the knowledge and the imagination. We search for the perfect destination for each of our clients and we find an infinite number of possibilities to offer a satisfying experience.</p>
            </article>
            <figure class="services__thumbnail">
                <img src="images/servicios1-vgalatours.jpg" alt="Tours Con Avión Incluído">
            </figure>
        </div>
        <div class="display-flex">
            <figure class="services__thumbnail">
                <img src="images/servicios2-vgalatours.jpg" alt="Tours Con Avión Incluído">
            </figure>
            <article class="services__item services__bg--gray">
                <h3 class="base-title">Tailor Made Trips <small>total experience</small></h3>
                <hr class="base-separator">
                <p class="base-description">We are compromised on creating personalized life experiences in and outside the country. We base our planning in our wide knowledge and experience, in order to answer fast and effective to the demands of our clients that come through our website and our sales center.</p>
            </article>
        </div>

        <!--  Services List -->
        <div class="container">
            <h6 class="base-description">We count with a “pool” of services for any way of traveling: <br>
                Families, Couples, Individuals or Groups.</h6>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv1-vgala.png" alt="Flights">
                    </figure>
                    <h3 class="base-subtitle">Flights</h3>
                    <p class="base-description">We can arrange flights from any part of the world to the main cities in Mexico and inside Mexico between the different states.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv2-vgala.png" alt="Hotels">
                    </figure>
                    <h3 class="base-subtitle">Hotels</h3>
                    <p class="base-description">We count with a great variety of lodging in all the country. 5, 4 and 3 stars hotels as well as the best boutique hotels that will offer a unique experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv3-vgala.png" alt="Transfers">
                    </figure>
                    <h3 class="base-subtitle">Transfers</h3>
                    <p class="base-description">We can arrange any kind of transfer; from public transport, to private for groups or exclusive for our client. And we offer the best fleet of cars from basics to VIP.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv4-vgala.png" alt="Tours">
                    </figure>
                    <h3 class="base-subtitle">Tours</h3>
                    <p class="base-description">In each region we have a diversity of tours of different kinds; we offer a complete experience while taking the traveler to know the most representative corners of Mexico.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv5-vgala.png" alt="Guides">
                    </figure>
                    <h3 class="base-subtitle">Guides</h3>
                    <p class="base-description">We recognize the importance of feeling at home, that’s why we have guides that offer the tours in different languages for a pleasant and complete experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv6-vgala.png" alt="Specials">
                    </figure>
                    <h3 class="base-subtitle">Specials</h3>
                    <p class="base-description">We know our surrounding that’s why we allow ourselves to suggest the best events and restaurants to complement the holidays. We count with the support to make the needed reservations.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-lg-push-4 col-md-4 col-md-push-4 col-sm-4 col-sm-push-4 col-xs-12">
                <div class="services-list__item">
                    <figure class="services-list__icon">
                        <img src="images/services/serv7-vgala.png" alt="Tickets">
                    </figure>
                    <h3 class="base-subtitle">Tickets</h3>
                    <p class="base-description">We make sure that nothing is missing in our tours; that’s why we are in charge of having all the entrances needed and ready to the archeological zones that our clients are willing to visit.</p>
                </div>
            </div>
        </div>
        <!-- /serviceslist  -->
    </section>
    <!-- /services -->
    <?php include('html/newsletter.php'); ?>
    <?php include('html/form.php'); ?>
    <?php include('html/footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--  Custom Javascript Functions -->
    <script src="js/navigation.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
