<?php

include("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];
$name = $_POST['name'];
$pais = $_POST['pais'];
$curso = $_POST['curso'];

mysqli_query($link,"UPDATE `usuarios` SET `name` = '$name', `pais` = '$pais', `curso` = '$curso' WHERE name = '$nombre'");

mysqli_query($link,"UPDATE 'asignaturas' SET `user` = '$name' WHERE user = '$name'");
mysqli_query($link,"UPDATE 'calendario' SET `user` = '$name' WHERE user = '$name'");
mysqli_query($link,"UPDATE 'horario' SET `user` = '$name' WHERE user = '$name'");
mysqli_query($link,"UPDATE 'notas' SET `user` = '$name' WHERE user = '$name'");

$_SESSION['nombre'] = $name;

header("Location: ../../../index.php?m");


?>