<?php

include("../../resources/conexion.php");

$id = $_GET['id'];

mysqli_query($link,"DELETE FROM `calendario` WHERE `id` = $id");

header("Location: ../../index.php?m");

?>