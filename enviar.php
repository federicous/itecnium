<?php
$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$listaPrecios = $_POST['listaPrecios'];
$inputCliente = $_POST['inputCliente'];

$header = 'From: ' . $inputEmail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $inputName . ",\r\n";
$mensaje .= "Su e-mail es: " . $inputEmail . " \r\n";
$mensaje .= "Lista de precios: " . $listaPrecios . " \r\n";
$mensaje .= "Tipo de cliente: " . $inputCliente . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'federicous@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>