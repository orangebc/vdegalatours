<?php
	$name = $_POST['mainName'];
	$email = $_POST['mainEmail'];
	$phone = $_POST['mainPhone'];
    $country = $_POST['mainCountry'];
    $city = $_POST['mainCity'];
	$areYou = $_POST['mainAreYou'];
	$mainDateStart = new DateTime($_POST['mainDateStart']);
	$dateStart = $mainDateStart->format('d/m/Y');
	$mainDateReturn = new DateTime($_POST['mainDateReturn']);
	$dateReturn = $mainDateReturn->format('d/m/Y');
	$numberOfPeople = $_POST['mainNumberOf'];
	$circuits = $_POST['mainCircuits'];
	$modulars = $_POST['mainModulars'];
	$observations = $_POST['mainObservations'];
    $trip = $_POST['mainTrip'];
    $whereDidYouFindUs = join(", ", $_POST['mainWhereDidYouFindUs']);

	$to = 'ventas@vdegalatours.com.mx';
	$title = 'Viajes de Gala Cotizador';
	$from = "Cotizador@vdegalatours.com.mx";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>Viajes de Gala Cotizador </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' . $name . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
    $message .= 'Teléfono: ' . '<strong>' . $phone . "</strong><br><br>";
	$message .= 'Fecha de salida: ' . '<strong>' . $dateStart . "</strong><br><br>";
	$message .= 'Fecha de regreso: ' . '<strong>' . $dateReturn . "</strong><br><br>";
	$message .= 'Es Usted: ' . '<strong>' . $areYou . "</strong><br><br>";
	$message .= 'País: ' . '<strong>' . $country . "</strong><br><br>";
	$message .= 'Estado: ' . '<strong>' . $city . "</strong><br><br>";
	$message .= 'Personas: ' . '<strong>' . $numberOfPeople . "</strong><br><br>";
	$message .= 'Circuitos: ' . '<strong>' . $circuits . "</strong><br><br>";
	$message .= 'Modulares: ' . '<strong>' . $modulars . "</strong><br><br>";
	$message .= 'Dónde nos vio: ' . '<strong>' . $whereDidYouFindUs . "</strong><br><br>";
	$message .= 'Observaciones: ' . '<strong>' . $observations . "</strong><br><br>";
	$message .= 'Tu viaje a la medida: ' . '<strong>' . $trip . "</strong><br><br>";
	$message .= '</body></html>';

	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">
			alert("Gracias, revisaremos su cotizacion y nos pondremos en contacto a la brevedad.");
		    window.location.href = "http://vdegalatours.com.mx";
	</script>
		'
	;
		} else {
			echo 'Por alguna razón algo no salió como se esperaba :('; }
		}
?>
