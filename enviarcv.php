<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$radio = $_POST['radio-igual'];
$calendar = $_POST['calendar'];
$zona = $_POST['zona'];
$file = $_POST['file'];
$comentarios = $_POST['comentarios'];
$acepta = $_POST['acepta'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jeremiashammes1@gmail.com';
$asunto = 'Nuevo CV ingresado via web!';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>