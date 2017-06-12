<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $tel = ($_POST['tel']);
		$message = $_POST['message'];
		$prod = ($_POST['prod']);
    $value = ($_POST['weight']);
    $weight = ($_POST['weight']);
    $vol = ($_POST['vol']);
    $local1 = ($_POST['local1']);
    $prov1 = ($_POST['prov1']);
    $local2 = ($_POST['local2']);
    $prov2 = ($_POST['prov2']);
		$from = 'testeando';
		$to = 'alexisveron1993@gmail.com';
		$subject = 'Presupuesto transporte ';

		$body ="De: $name\n E-Mail: $email\n Mensaje:\n $message tel: $tel \n Producto:$prod \n Valor:$value \n Peso:$weight \n Volumen:$vol \n Localidad origen: $local1 \n Prov. origen: $prov1 \n Localidas destino: $local2 \n Prov. destino: $prov2 ";

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Gracias por contactarse! Responderemos a la brevedad </div>';
	} else {
		$result='<div class="alert alert-danger"> Hubo un inconveniente. Intente nuevamente.</div>';
	}

	}
?>
