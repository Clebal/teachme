<?php

include ("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link, "SELECT * FROM usuarios WHERE name = '$nombre'");

$row = mysqli_fetch_array($query);

?>

<head>

    <meta charset="utf-8">

</head>

<body>

    <form action="apps/config/datos/enviar.php" method="post">

        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <input type="text" name="pais" value="<?php echo $row['pais']; ?>" required>

        <input type="text" name="curso" value="<?php echo $row['curso']; ?>" required>

        <br>

        <div style="display: block; text-align: center;">

            <div class="button">

                <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

            </div>

        </div>

        <br><br><br>

    </form>

</body>