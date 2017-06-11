<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $tel = intval($_POST['tel']);
		$message = $_POST['message'];
		$prod = intval($_POST['prod']);
    $value = intval($_POST['weight']);
    $weight = intval($_POST['weight']);
    $vol = intval($_POST['vol']);
    $local1 = intval($_POST['local1']);
    $prov1 = intval($_POST['prov1']);
    $local2 = intval($_POST['local2']);
    $prov2 = intval($_POST['prov2']);
		$from = 'testeando';
		$to = 'alexisveron1993@gmail.com';
		$subject = 'Presupuesto transporte ';

		$body ="De: $name\n E-Mail: $email\n Mensaje:\n $message tel: $tel \n producto:$prod \n";
// If there are no errors, send the email
	if (mail ($to, $subject, $body, $from,$value,$weight,$vol)) {
		$result='<div class="alert alert-success">Gracias por contactarse! Responderemos a la brevedad </div>';
	} else {
		$result='<div class="alert alert-danger"> Hubo un inconveniente. Intente nuevamente.</div>';
	}

	}
?>
