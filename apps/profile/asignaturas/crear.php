<?php

header("Content-Type: text/html;charset=utf-8");

mysqli_query($link, "SET NAMES 'utf8'");

include("../../../resources/conexion.php");

$i = 1;

session_start();

$user = $_SESSION['nombre'];

while(isset($_POST['asignatura' . $i])){
    
    $nombre = $_POST['asignatura' . $i];
    
    mysqli_query($link,"INSERT INTO `asignaturas`(`nombre`, `user`) VALUES ('$nombre','$user')");
    
    $i++;
    
}

header("Location: ../../../index.php?m");


?>