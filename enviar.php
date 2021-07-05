<?php
$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputCliente = $_POST['inputCliente'];
$mensaje = $_POST['mensaje'];
$listaPrecios = $_POST['listaPrecios'];

$header = 'From: ' . $inputEmail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$mensaje = "Este mensaje fue enviado por " . $inputName . ",\r\n";
$mensaje .= "Su e-mail es: " . $inputEmail . " \r\n";
$mensaje .= "Tipo de cliente: " . $inputCliente . " \r\n";
$mensaje .= "Recibier lista de precios: " . $listaPrecios . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'federicous@gmail.com'; // El mail donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>