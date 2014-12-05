<?php

include("../../../resources/conexion.php");

$i = 1;

session_start();

while($i <= 6){
 
    $lunes = $_POST["lunes$i"];
    $martes = $_POST["martes$i"];
    $miercoles = $_POST["miercoles$i"];
    $jueves = $_POST["jueves$i"];
    $viernes = $_POST["viernes$i"];
    $nombre = $_SESSION['nombre'];
        
    mysqli_query($link,"INSERT INTO `horario`(`lunes`,`martes`,`miercoles`,`jueves`,`viernes`, `user`) values('$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$nombre')");
    
    $i++;
}

header("Location: ../../../index.php?m");

?>