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
    $id_lunes = $_POST["id_lunes_$i"];
    $id_martes = $_POST["id_martes_$i"];
    $id_miercoles = $_POST["id_miercoles_$i"];
    $id_jueves = $_POST["id_jueves_$i"];
    $id_viernes = $_POST["id_viernes_$i"];
    
    mysqli_query($link,"UPDATE `horario` SET `lunes` = '$lunes', `martes` = '$martes', `miercoles` = '$miercoles', `jueves` = '$jueves', `viernes` = '$viernes' WHERE user = '$nombre' && id = '$id_lunes'");
    
    $i++;
}

header("Location: ../../../index.php?m");

?>