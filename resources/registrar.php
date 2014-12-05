<?php

include("conexion.php");

$ruta="../img/";//ruta carpeta donde queremos copiar las imágenes 
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
$directorio=opendir("../img/"); 


$ruta2="img/";
$uploadfile_nombre2=$ruta2.$_FILES['imagen']['name']; 

echo $uploadfile_nombre2;

$fecha_registro = date('Y-m-d');

$user = $_POST['user'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$pais = $_POST['pais'];
$avatar = $uploadfile_nombre2;
$fecha_nacimiento = $_POST['fecha_nacimiento'];

echo $fecha_nacimiento;

// Comprobación para ver si existe ya el usuario

$result_user = mysqli_query($link, "SELECT user FROM usuarios WHERE user = '$user'");
$result_email = mysqli_query($link, "SELECT email FROM usuarios WHERE email = '$email'");
$result_name = mysqli_query($link, "SELECT name FROM usuarios WHERE name = '$name'");

if($row_user = mysqli_fetch_assoc($result_user)){

    $contenido_get = base64_encode('El nombre de usuario ya existe');

    header("Location: ../index.php?m=$contenido_get");

}elseif($row_email = mysqli_fetch_assoc($result_email)){
 
    $contenido_get = base64_encode('Ya hay un usuario con ese email');

    header("Location: ../index.php?m=$contenido_get");
    
}elseif($row_name = mysqli_fetch_assoc($result_name)){
    
    $contenido_get = base64_encode('El nombre real escogido ya existe');

    header("Location: ../index.php?m=$contenido_get");
    
}else{

    mysqli_query($link,"INSERT INTO usuarios(user, password, name, email, curso, pais, avatar, fecha_registro, fecha_nacimiento) VALUES ('$user', '$password', '$name', '$email', '$curso', '$pais', '$avatar', '$fecha_registro', '$fecha_nacimiento')");

    $contenido_get = base64_encode('Ya puedes iniciar sesión :)');

    header("Location: ../index.php?m=$contenido_get");


}

?>