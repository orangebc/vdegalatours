<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Options</title>

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
    <!-- Pays -->
    <section class="pays">
        <div class="container">
            <h2 class="base-title">Payments Options</h2>
            <h6 class="base-description">We have online payment:</h6>
            <div class="pays__paypal text-center">
                <img src="images/logo-paypal.png" alt="Paypal Online Option">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="5SYR3575369AU">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
            <hr class="base-separator">
            <div class="col-lg-4 col-md-4 paddingtb">
                <h4 class="base-subtitle">Bank <br> transfer</h4>
                <h6 class="base-description">If you prefer, make a transfer to:</h6>

                <h3 class="base-black-subtitle">Scotiabank <br> CLABE: 044180001020116464</h3>
            </div>
            <div class="col-lg-4 col-md-4 paddingtb">
                <h4 class="base-subtitle">Deposit</h4>
                <h6 class="base-description">Make your deposit to our account:</h6>

                <h3 class="base-black-subtitle">Viajes de Gala S.A. De C.V. <br> Scotiabank <br> Cuenta: 2011646</h3>
            </div>
            <div class="col-lg-4 col-md-4 paddingtb">
                <h4 class="base-subtitle">Direct Payment</h4>
                <h6 class="base-description" style="text-transform: none;">Visit us at:</h6>

                <p class="base-description"><strong>Viajes de Gala, S.A. DE C.V.</strong><br>
                    Francisco Petrarca #133-202 <br>
                    Col. Chapultepec Morales <br>
                    México, D.F. <br>
                </p>
                <h6 class="base-description">And make your payment directly with us.</h6>
            </div>
        </div>
    </section>
    <!-- /pays -->
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
