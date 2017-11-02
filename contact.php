<?php
$destino="lhidalgo@sklempresas.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$asunto= $_POST["asunto"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"Auton - Tienes un mensaje desde tu web de Contacto", $contenido);

?>