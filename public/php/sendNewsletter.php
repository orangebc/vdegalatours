<?php

	$name = $_POST['newsletterName'];
	$email = $_POST['newsletterEmail'];

	$to = 'mktg@vdegalatours.com.mx';
	$title = 'Alguien se ha suscrito!';
	$from = "Newsletter@vdegalatours.com.mx";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>Viajes de Gala Newsletter </strong><br><br>';
	$message .= 'Nombre: ' . '<strong>' . $name . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
	$message .= '</body></html>';


	if ($_POST['submit']) {
	    if (mail($to, $title, $message, $headers )) {

	    echo '
            <script type="text/javascript">
			    alert("Gracias, en breve nos comunicaremos con usted.");
                window.location.href = "http://vdegalatours.com.mx";
	        </script>';
		} else {
			echo 'Lo sentimos, algo no salió del todo bien :('; }
		}
?>
