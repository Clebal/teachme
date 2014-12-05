<?php

include("../../../resources/conexion.php");

$id = $_GET['id'];

mysqli_query($link,"DELETE FROM `asignaturas` WHERE `id` = $id");

header("Location: ../../../index.php?m");

?>