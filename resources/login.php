<?php

include('conexion.php');

$username = $_POST['username'];
$password = $_POST['password'];

echo $username . "<br><br>";
echo $password;

$query = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$username' OR user = '$username'") or die ("<br><br>No ha funcionado");

$row = mysqli_fetch_array($query);

if($row['user'] == "$username"){

    if($row['password'] == "$password"){

        session_start();

        $_SESSION['nombre'] = $row['name'];

        header('Location: ../index.php');

    }else{

        $contenido_get = base64_encode('Usuario o contraseña incorrecto');

        header("Location: ../index.php?m=$contenido_get");


    }

}elseif($row['email'] == "$username"){

    if($row['password'] == "$password"){

        session_start();

        $_SESSION['nombre'] = $row['name'];

        header('Location: ../index.php');

    }else{

        $contenido_get = base64_encode('Usuario o contraseña incorrecto');

        header("Location: ../index.php?m=$contenido_get");

    }

}else{

        $contenido_get = base64_encode('Usuario o contraseña incorrecto');

        header("Location: ../index.php?m=$contenido_get");

    }

?>