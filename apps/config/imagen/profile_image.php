<?php

include("../../../resources/conexion.php");

$ruta="../../../img/";//ruta carpeta donde queremos copiar las imágenes 
$uploadfile_temporal= $_FILES['imagen']['tmp_name']; 
$uploadfile_nombre=$ruta.$_FILES['imagen']['name']; 

if (is_uploaded_file($uploadfile_temporal)) 
{ 
    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
} 
else 
{ 
echo "error"; 
} 
$directorio=opendir("../../../img/"); 


$ruta2="img/";
$uploadfile_nombre2=$ruta2.$_FILES['imagen']['name']; 

echo $uploadfile_nombre2;

session_start();

$nombre = $_SESSION['nombre'];

echo "<br><br>" . $nombre;

mysqli_query($link,"UPDATE `usuarios` SET `avatar` = '$uploadfile_nombre2' WHERE name = '$nombre'");

header("Location: ../../../index.php?m");

?>