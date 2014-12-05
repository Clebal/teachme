<?php

include ("../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link,"SELECT * FROM notas WHERE user = '$nombre' ");

?>

<head>

    <meta charset="utf-8">

    <style>

        .div_container{

            background: #fafafa;
            background-image: url(img/bg_esquina.png);
            background-repeat: no-repeat;
            background-size: 35px 35px;

            box-shadow:0px 0px 5px #a7a7a7;

            margin-top: -25px;
        }

        .div_title{

            font-size: 22px;
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

        #push:before{

            content: "+";
            color: white;
            transition: 0.2s;

        }

        #push:active:before{

            font-size: 25px;
            transition: 0.2s;

        }

        #borrar2:before{

            content: "X";
            font-weight: bold;
            color: red;
            text-shadow: 0px 0px 1px gray;
            position: absolute;
            right: 15px;
            padding: 25px 10px 5px 8px;

        }

        p{

            color: black;

        }

    </style>

</head>
<body>

    <div style="width: 100%; height: 50px; background: #1A9EE2; margin-top: -30px">

        <a href="#" onclick="$('#registrar_valor').cargar2('apps/nota/registro/index.php');"><p style="text-align: center; color: white; padding-top: 5px; font-size: 30px; font-weight: bold" id="push"></p></a>

    </div>

    <div id="registrar_valor" style="margin-top: 22px;"></div>

    <?php 

while($row = mysqli_fetch_array($query)){

    ?>

    <div class="div_container">
        <a href="apps/nota/borrar.php?id=<?php echo $row['id']; ?>"><div id="borrar2"></div></a>
        <p class="div_title"><?php echo $row["nombre_asignatura"]; ?></p>

        <p class="div_description"><?php echo $row["nota_asignatura"]; ?></p>

    </div>

    <?php

}

    ?>

    <br><br>

    <script>
        jQuery.fn.cargar2 = function(url) {
            $(document).ready(function(){
                $("#registrar_valor").load(url);
            });
        };
    </script>

</body>