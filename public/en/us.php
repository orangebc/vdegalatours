<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <meta name="description" content="Somos una empresa experta en servicios turísticos y consultoría de viajes
        hacia y desde México para así brindar la mejor experiencia a través de un equipo con mentalidad
        joven y dinámica que ofrezca el mejor valor del mercado.">
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
    <!-- About us -->
    <section class="about">
        <div class="container">
            <h2 class="base-title">
                <small>Us</small>Viajes de Gala
            </h2>
            <div class="col-lg-4 col-md-4">
                <div class="about__container">
                    <h3 class="base-subtitle">Mission</h3>
                    <hr class="base-separator">
                    <p class="base-description">Our mission is to be experts in touristic services and travel consultancy on trips from and to Mexico in order to provide the best experience, all this, through a team with young and dynamic mindset that offers the best value in the market.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="about__container">
                    <h3 class="base-subtitle">Vision</h3>
                    <hr class="base-separator">
                    <p class="base-description">We are a successful company that adapts to the evolution of the touristic industry through the quality management in our operation. We are a point of reference in the touristic market, thanks to the creativity and reliability that we give to our services and products.</p>
                    <p class="base-description">We create loyalty in our clients as we are a tour operator with a social responsibility that promotes the sustainable tourism and the cultural diversity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="about__container">
                    <h3 class="base-subtitle">Value</h3>
                    <hr class="base-separator">
                    <ul class="base-list">
                        <li>Professional ethics</li>
                        <li>Operative efficiency</li>
                        <li>Creativity</li>
                        <li>Honesty</li>
                        <li>Productivity</li>
                        <li>Respect for the team work</li>
                        <li>Quality in our service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->
    <!--  Scope -->
    <section class="scope">
        <div class="container">
            <h2 class="base-white-title"><small>Worldwide</small>presence</h2>
            <hr class="base-white-separator">
            <p class="base-white-description">In Viajes de Gala, we like to be at the vanguard, that’s why we are present in the different touristic expositions throughout the globe. This, with the aim of bringing our "know how", to the different markets and offer top quality experiences in our country.</p>
        </div>
    </section>
    <!-- /scope -->
    <!-- Fair -->
    <section class="fair">
        <div class="container-fluid nopadding">
            <div class="col-lg-4 nopadding">
                <div class="fair__title">
                    <h2 class="base-title">Fairs</h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="fair__logos">
                    <ul class="list-inline">
                        <li>
                            <img src="images/feria-vgala.png" alt="World Travel Market" />
                        </li>
                        <li>
                            <img src="images/feria1-vgala.png" alt="International French Travel Market" />
                        </li>
                        <li>
                            <img src="images/feria2-vgala.png" alt="ITB Berlín" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /fair -->
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
