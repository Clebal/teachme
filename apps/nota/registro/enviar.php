<!DOCTYPE HTML>
<head>

    <meta charset="iso-8859-1">
    
</head>

<?php

include ("../../../resources/conexion.php");

$nombre = $_POST["nombre"];

$valor = str_replace(",",".",$_POST["valor"]);

$query = mysqli_query($link, "INSERT INTO notas(nombre_asignatura, nota_asignatura) VALUES ('$nombre','$valor')");

$m = base64_encode("Nota registrada");

header("Location: ../../../index.php?m=$m");

?>