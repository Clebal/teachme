<!DOCTYPE HTML>
<head>

    <meta charset="utf-8">
    
</head>

<?php

include ("../../../resources/conexion.php");

$fecha = $_POST["fecha"];

$asunto = $_POST["asunto"];

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link, "INSERT INTO calendario(fecha, asunto, user) VALUES ('$fecha','$asunto','$nombre')");

$m = base64_encode("Evento añadido al Calendario");

header("Location: ../../../index.php?m=$m");

?>