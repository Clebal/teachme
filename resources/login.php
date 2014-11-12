<?php

include('conexion.php');

$username = $_POST['username'];
$password = $_POST['password'];

echo $username . "<br><br>";
echo $password;

$query = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$username' or user = '$username'") or die ("<br><br>No ha funcionado");

$row = mysqli_fetch_array($query);

if($row['user'] == "$username"){

    if($row['password'] == "$password"){

        session_start();
        
        $_SESSION['nombre'] = $username;
        
        header('Location: ../index.php');


    }else{
 


    }}elseif($row['user'] == ""){

    }

?>