<?php

include ("../../resources/conexion.php");

function fechaesp($date, $opcion) {
    $dia = explode("-", $date, 3);
    $year = $dia[0];
    $month = (string)(int)$dia[1];
    $day = (string)(int)$dia[2];

    $dias = array("domingo","lunes","martes","mi&eacute;rcoles" ,"jueves","viernes","s&aacute;bado");
    $tomadia = $dias[intval((date("w",mktime(0,0,0,$month,$day,$year))))];

    $meses = array("", "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

    switch ($opcion) {
        case "diasemana":
        echo $tomadia;
        break;
        case "diames":
        if(($day == 0) OR ($day == 1) OR ($day == 2) OR ($day == 3) OR ($day == 4) OR ($day == 5) OR ($day == 6) OR ($day == 7) OR ($day == 8) OR ($day == 9)){ 
            echo "0".$day;

        }else{

            echo $day;

        }
        break;
        case "mes":
        echo $meses[$month];
        break;
        case "anio":
        echo $year;
        break;
        default:
        echo "Nada";
    } 
}

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link,"SELECT * FROM calendario WHERE user = '$nombre'") or die(mysqli_error());

?>

<head>

    <meta charset="ISO-8859-1">

    <style>

        p{

            color: black;

        }

        .div_container{

            box-shadow:0px 0px 5px #a7a7a7;

            margin-top: -100px;
            background: white;
        }

        .div_title{

            font-size: 22px;
            padding-top: 10px;
            padding-left: 20px;

            color: #00b2ff;

            font-weight: 300;

        }

        .div_blue{

            color: white;
            background: #1A9EE2;
            box-shadow: 0px 0px 0px;

        }

        .div_dia{

            color: white;
            font-size: 45px;
            font-weight: 300;
            text-align:center;
        }

        .div_dia p{

            color: white;

        }

        .div_mes{

            color: white;
            font-size: 45px;
            font-weight: 300;
            text-align:center;
            font-size: 15px;

        }

        .div_mes p{

            color: white;
            margin-top: -55px;

        }

        .div_ano{

            color: white;
            font-size: 45px;
            font-weight: 400;
            text-align:center;
            font-size: 15px;
        }

        .div_ano p{

            color: white;
            margin-top: -15px;
            padding-bottom: 6px;

        }

        .div_description{

            margin-top: -15px;
            margin-left: 25px;
            margin-right: 20px;
            padding-bottom: 10px;

        }

        .div_asunto{

            width: 100%;
            height: 100%;
            margin-top: -16px;

        }

        .div_asunto p{

            padding-top: 10px;
            font-size: 17px;
            text-align: center;

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

        #borrar:before{

            content: "X";
            font-weight: bold;
            color: red;
            text-shadow: 0px 0px 1px gray;
            position: absolute;
            right: 0;
            margin-right: 10px;
            margin-top: 5px;

        }

    </style>

</head>
<body>

    <div style="width: 100%; height: 50px; background: #1A9EE2; margin-top: -30px">

        <a href="#" onclick="$('#registrar_valor').cargar2('apps/calendario/crear/index.php');"><p style="text-align: center; color: white; padding-top: 5px; font-size: 30px; font-weight: bold" id="push"></p></a>

    </div>

    <div id="registrar_valor" style="margin-top: 22px; margin-bottom: -10px;"></div>

    <?php

//echo fechaesp($date, "diasemana"); // para imprimir el dia de la semana
//echo fechaesp($date, "diames"); // para imprimir el dia del mes
//echo fechaesp($date, "mes"); // para imprimir el mes
//echo fechaesp($date, "anio"); // para imprimir el año

$query = mysqli_query($link,"SELECT * FROM calendario");

while($row = mysqli_fetch_array($query)){

    $date = $row['fecha'];

    ?>
    <br><br><br><br>
    <div class="div_container">

        <div class="div_blue">

            <div class="div_dia">

                <p><?php echo fechaesp($date, "diames"); ?></p>

            </div>

            <div class="div_mes">

                <p><?php echo fechaesp($date, "mes"); ?></p>

            </div>

            <div class="div_ano">

                <p><?php echo fechaesp($date, "anio"); ?></p>

            </div>

        </div>

        <div class="div_asunto">

            <p><?php echo $row['asunto']; ?></p>

        </div>

    </div>

    <?php

}

    ?>
    
    <br><br>

    <!--<?php

/*

while($row = mysqli_fetch_array($query)){

if(

?>

    <div class="div_container">
        <a href="apps/nota/borrar.php?id=<?php echo $row['id']; ?>"><div id="borrar"></div></a>
        <p class="div_title"><?php echo $row["nombre_asignatura"]; ?></p>

        <p class="div_description"><?php echo $row["nota_asignatura"]; ?></p>

    </div>

    <?php

}

    */?>
-->
    <br><br>

    <script>
        jQuery.fn.cargar2 = function(url) {
            $(document).ready(function(){
                $("#registrar_valor").load(url);
            });
        };
    </script>

</body>