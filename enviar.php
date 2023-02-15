<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Termotec</title>
    
    <?php

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$prointerese = $_POST['prointeres'];
$localidad = $_POST['localidad'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por  " . "$name" . ",\r\n";
$message .= "Su e-mail es: " . "$email" . " \r\n";
$message .= "Asunto: " . "$asunto" . " \r\n";
$message .= "Producto de Interes: " . "$prointerese" . " \r\n";
$message .= "Localidad: " . "$localidad" . " \r\n";

$message .= "Enviado el " . date('d/m/Y', time());



$for = 'Info@termotec.ar';
$subjet = 'Mensaje de asunto';

mail($for, $subjet, utf8_decode($message), $header);




?>
</head>
<body>
    <button id="swetalert" class="btn btn-secondary boton mt-2  ">¡Click!</button>

    <script src="main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>