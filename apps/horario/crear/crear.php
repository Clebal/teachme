<?php

include("../../../resources/conexion.php");

$i = 1;

session_start();

while((isset($_POST["lunes$i"])) AND (isset($_POST["martes$i"])) AND (isset($_POST["miercoles$i"])) AND (isset($_POST["jueves$i"])) AND (isset($_POST["viernes$i"]))){
 
    $lunes = $_POST["lunes$i"];
    $martes = $_POST["martes$i"];
    $miercoles = $_POST["miercoles$i"];
    $jueves = $_POST["jueves$i"];
    $viernes = $_POST["viernes$i"];
    $nombre = $_SESSION['nombre'];
    
    
    mysqli_query($link,"INSERT INTO `horario`(`lunes`,`martes`,`miercoles`,`jueves`,`viernes`, `user`) values(\" $lunes \", \" $martes \", \" $miercoles \", \" $jueves \", \" $viernes \")");
    
    ++$i;
}

$m = base64_encode("Tabla creada :)");

header("Location: ../../../index.php?m=$m");

?>