<head>

    <style>

        .divContenedor2{
            width: 100%;
            height: 100%;
            margin: 10px auto 30px auto;
            text-align: left;
        }

        .divContenedor2 label{

            font-weight: bold;
            padding: 5px 20px;
            display: block;
            cursor: pointer;
            color: #fff;
            line-height: 33px;
            font-size: 19px;
            background: #1A9EE2;
            -webkit-transition: 0.3s ease-in-out;
            -moz-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            -ms-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
        }

        .divContenedor2 label:hover{
            background: #1f96d3;
            color:white;
            padding-left: 30px;

        }

        .divContenedor2 input:checked + label,
        .divContenedor2 input:checked + label:hover{
            background: #1A9EE2;
            color: white;

        }

        .divContenedor2 input{

            display: block;

        }

        .divContenedor2 input[type="checkbox"]{

            display: none;

        }

        .divContenedor2 input[type="text"]{

            width: 90%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 10px;
            height: 25px;
            font-size: 17.5px;

        }

        .divContenedor2 .texto{
            margin-top: -1px;
            overflow: hidden;
            height: 0px;
            background-color: #fff;
            -webkit-transition: 0.3s ease-in-out;
            -moz-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            -ms-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
        }

        .divContenedor2 .texto p{
            color: #777;
            line-height: 23px;
            font-size: 14px;
            padding: 20px;
        }

        .divContenedor2 input:checked ~ .texto{
            height: 255px;
        }

        .form2{

            padding: 20px;

        }

    </style>

</head>

<body>

    <?php

include("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query_lunes = mysqli_query($link,"SELECT lunes, id FROM horario WHERE user = '$nombre'");
$query_martes = mysqli_query($link,"SELECT martes, id FROM horario WHERE user = '$nombre'");
$query_miercoles = mysqli_query($link,"SELECT miercoles, id FROM horario WHERE user = '$nombre'");
$query_jueves = mysqli_query($link,"SELECT jueves, id FROM horario WHERE user = '$nombre'");
$query_viernes = mysqli_query($link,"SELECT viernes, id FROM horario WHERE user = '$nombre'");

    ?>

    <form class="form2" action="apps/profile/horario/update.php" method="post">
        <div class="divContenedor2">
            <div>
                <input id="check12" type="checkbox">
                <label for="check12">Lunes</label>
                <div class="texto">

                    <?php
$i = 1;
while($lunes = mysqli_fetch_array($query_lunes)){


                    ?>

                    <input type="text" name="lunes<?php echo $i; ?>" value="<?php echo $lunes['lunes']; ?>" required>

                    <input type="hidden" name="id_lunes_<?php echo $i; ?>" value="<?php echo $lunes['id']; ?>">

                    <?php

    $i++;

}

                    ?>

                    <br><br>
                </div>
            </div>
            <div>
                <input id="check13" type="checkbox">
                <label for="check13">Martes</label>
                <div class="texto">


                    <?php
$i = 1;
while($martes = mysqli_fetch_array($query_martes)){


                    ?>

                    <input type="text" name="martes<?php echo $i; ?>" value="<?php echo $martes['martes']; ?>" required>

                    <input type="hidden" name="id_martes_<?php echo $i; ?>" value="<?php echo $martes['id']; ?>">

                    <?php

    $i++;

}


                    ?>
                </div>
            </div>
            <div>
                <input id="check14" type="checkbox">
                <label for="check14">Miercoles</label>
                <div class="texto">
                    <?php
$i = 1;
while($miercoles = mysqli_fetch_array($query_miercoles)){


                    ?>

                    <input type="text" name="miercoles<?php echo $i; ?>" value="<?php echo $miercoles['miercoles']; ?>" required>

                    <input type="hidden" name="id_miercoles_<?php echo $i; ?>" value="<?php echo $miercoles['id']; ?>">

                    <?php

    $i++;

}

                    ?>
                </div>
            </div>
            <div>
                <input id="check15" type="checkbox">
                <label for="check15">Jueves</label>
                <div class="texto">
                    <?php
$i = 1;
while($jueves = mysqli_fetch_array($query_jueves)){


                    ?>

                    <input type="text" name="jueves<?php echo $i; ?>" value="<?php echo $jueves['jueves']; ?>" required>

                    <input type="hidden" name="id_jueves_<?php echo $i; ?>" value="<?php echo $jueves['id']; ?>">

                    <?php

    $i++;

}

                    ?>
                </div>
            </div>
            <div>
                <input id="check16" type="checkbox">
                <label for="check16">Viernes</label>
                <div class="texto">
                    <?php
$i = 1;
while($viernes = mysqli_fetch_array($query_viernes)){


                    ?>

                    <input type="text" name="viernes<?php echo $i; ?>" value="<?php echo $viernes['viernes']; ?>" required>

                    <input type="hidden" name="id_viernes_<?php echo $i; ?>" value="<?php echo $viernes['id']; ?>">

                    <?php

    $i++;

}
                    ?>
                </div>
            </div>
        </div>
        <br>

        <div class="button" style="text-align: center">

            <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

        </div>

        <br><br><br>

    </form>

</body>