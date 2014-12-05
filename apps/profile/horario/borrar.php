<?php

include("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

mysqli_query ($link,"DELETE FROM horario WHERE user = '$nombre'");

header("Location: ../../../index.php?m");

?>