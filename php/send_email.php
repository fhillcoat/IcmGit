<?php 
	$nombre = $_POST['nombre'];
	$empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$comentarios = $_POST['f_comentarios']

	$destinatario = 'mmedveseck@aeromovingsa.com.ar';
	$asunto = 'Consulta en ICM Ventilación';
	$cuerpo = "$nombre - $empresa ha realizado una consulta<br><br>$comentarios<br><br>Respondele a: $email<br>O llamalo al $telefono";

	echo $asunto;
	echo $cuerpo; 
	
	$cabecera = 'MIME-Version: 1.0' . "\r\n";
	$cabecera .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabecera .= 'ICM Ventilación <mmedveseck@aeromovingsa.com.ar>'."\r\n";

	//Mail al usuario
	mail(	$email,
			"ICM Ventilación: Recibimos tu consulta", 
			"Hola $nombre, <br>
			Hemos recibido tu consulta y te contestaremos a la brevedad.<br><br>
			Muchas gracias!", 
			$cabecera);	
	//Mail a la empresa
	mail($destinatario, $asunto, $cuerpo, $cabecera);
?>