<?php

$destinatario = 'contacto@frasangroup.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono =  $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Solicitud de información FrasanGroup web";
$mensajeCompleto = "\nAtentamente: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje . "\n Telefono: " . $telefono ;

mail($destinatario, $header, $mensajeCompleto);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>