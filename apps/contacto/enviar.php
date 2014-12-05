<?php

$web_mail = "sergioclebal@hotmail.com";
$remitente = "Sukafe";

$nombre_activacion = str_replace(" ","_",$nombre);
$descripcion = $_POST['descripcion'];

$usuario = $_POST['name'];

$email = $_POST['email'];

$sAdjuntos = "";

// definir los detalles de la cabecera del email
// campo a campo 
$destinatario = $web_mail;
$remitente = $remitente;
$asunto = "Alguien acaba de hablar!";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Sukafe <$remitente>\r\n";
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
        <h1 style='color: white; padding-left: 15px; padding-top: 10px; margin-top: 0px;'>El usuario $usuario ha dicho: </h1>
    </div>
    <center>
    <div style=\"width: 100%; background: rgb(65, 148, 212);\">
    <div style='color: white; text-align: center; font-size: 25px;'>
    <br>

$descripcion

<br><br>

Su correo es: $email.

</div>
    </div>
    <div style='width: 100%; height: 50px; background: rgb(40, 128, 213);'>
        <h1 style='color: white; padding-left: 15px; padding-top: 10px; margin-top: 0px;'>Sukafe</h1>
    </div>
    </center>
  </body> 
 </html>";

mail($destinatario,$asunto,$cuerpo,$headers);

?>