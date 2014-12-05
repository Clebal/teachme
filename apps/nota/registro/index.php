<?php

include("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link,"SELECT nombre FROM asignaturas WHERE user = '$nombre'");

?>

<head>

    <meta charset="utf-8">

    <style>

        .div_container2{

            background: #fafafa;


            box-shadow:0px 0px 5px #a7a7a7;

            margin-top: -25px;
            margin-bottom: 60px;
        }

        .div_title{

            font-size: 25px;
            padding-top: 10px;
            padding-left: 20px;

            color: #00b2ff;

            font-weight: 300;

        }

        .div_description{

            margin-top: -15px;
            margin-left: 25px;
            margin-right: 20px;
            padding-bottom: 10px;

        }

        form{

            padding: 20px;

        }

        label{

            color: black;

        }

    </style>

</head>

<body>

    <div class="div_container2">

        <form action="apps/nota/registro/enviar.php" method="post">

            <label style="font-size: 20px;">Asignatura</label><br><br>
            <select name="nombre">
                <?php

while($while = mysqli_fetch_assoc($query)){

    foreach($while as $nombres){

        echo "<option value='$nombres'>".$nombres."</option>";

    }

}

                ?>
            </select>

            <br><br>

            <label style="font-size: 20px;">Nota</label><br><br>
            <input type="text" class="input" style="font-size: 15px;" name="asunto" required>
            <br><br>

            <div style="display: block; text-align: center;">

                <div class="button">

                    <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

                </div>

            </div>

        </form>

    </div>

</body>