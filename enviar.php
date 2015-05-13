<?php
//variables del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$uso= $_POST['uso'];
$caract= $_POST['caract'];


//Construccion del mensaje
$mensaje = "Nombre: ".$nombre."\n";
$mensaje .= "Correo: ".$email."\n";
$mensaje .= "¿Que tipo de informacio te gustaria ver en nuestra pagina?: ".$uso."\n";
$mensaje .= "¿Nos quieres comentar alguna cosa mas?: ".$caract."\n";


$asunto = "Correo desde formulario - Francisco";

$destinatario = "franciscosgi2015@gmail.com";

$cabeceras = 'From: franciscosgi2015@gmail.com' . "\r\n" .
    'Reply-To: franciscosgi2015@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


@mail($destinatario, $asunto, $mensaje, $cabeceras);

?>
<script>
	self.location="contacto2.html";
</script>