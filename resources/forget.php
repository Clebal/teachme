<?php

include("conexion.php");

$email = $_POST['email'];

$query = mysqli_query($link,"SELECT user, password FROM usuarios WHERE email = '$email'");

$row = mysqli_fetch_assoc($query);

$web_mail = $email;
$remitente = "Teach Me";

$nombre_activacion = str_replace(" ","_",$nombre);
$descripcion = $_POST['descripcion'];

$usuario = $row['user'];

$password = $row['password'];

$sAdjuntos = "";

// definir los detalles de la cabecera del email
// campo a campo 
$destinatario = $web_mail;
$remitente = $remitente;
$asunto = "Parece que se te ha olvidado algo";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Teach Me <$remitente>\r\n";
$headers .= "Reply-To: $remitente\r\n";
$headers .= "Return-path: $remitente\r\n";

// construir una \"página HTML\" que será el mail-HTML
$cuerpo = "
 <html>
  <head>
   <title>$asunto</title>
   </head>
  <body>
    <div style='width: 100%; height: 50px; background: rgb(40, 128, 213);'>
        <h1 style='color: white; padding-left: 15px; padding-top: 10px; margin-top: 0px;'>Has solicitado la recuperación de datos</h1>
    </div>
    <center>
    <div style=\"width: 100%; background: rgb(65, 148, 212);\">
    <div style='color: white; text-align: center; font-size: 25px;'>
    <br>

·Su nombre de usuario es: $usuario.

<br>

·Su contraseña es: $password.

<br>

Tenga más memoria la proxima :)

<br><br>

</div>
    </div>
    <div style='width: 100%; height: 50px; background: rgb(40, 128, 213);'>
        <h1 style='color: white; padding-left: 15px; padding-top: 10px; margin-top: 0px;'>Teach Me by Sukafe</h1>
    </div>
    </center>
  </body> 
 </html>";

mail($destinatario,$asunto,$cuerpo,$headers);

$contenido_get = base64_encode('Revisa tu bandeja de entrada, te hemos enviado un correo con tus datos. <br> Revise también el correo no deseado.');

header("Location: ../index.php?m=$contenido_get");

?>