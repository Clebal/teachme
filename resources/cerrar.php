<?php

// Recuperamos los datos de la sesión

session_start();

// ¡¡Y LOS DESTRUIMOS!!

session_destroy();
session_unset();

// Llevamos al usuario al index.php

header("Location: ../index.php");

?>
