<?php

include("../../resources/conexion.php");

$id = $_GET['id'];

mysqli_query($link,"DELETE FROM `notas` WHERE `id` = $id");

$m = base64_encode("Nota borrada!");

header("Location: ../../index.php?m=$m");

?>