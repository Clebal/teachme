<?php

include ("../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link, "SELECT * FROM usuarios WHERE name = '$nombre'");

$row = mysqli_fetch_array($query);

?>

<head>

    <meta charset="utf-8">

    <style>

        .divContenedor{
            width: 100%;
            height: 100%;
            margin: 10px auto 30px auto;
            text-align: left;
        }

        .divContenedor .label{

            font-weight: bold;
            padding: 5px 20px;
            display: block;
            cursor: pointer;
            color: #000;
            line-height: 33px;
            font-size: 25px;
            background: #fff;
            -webkit-transition: 0.3s ease-in-out;
            -moz-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            -ms-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
        }

        .divContenedor .label:hover{
            background: #1A9EE2;
            color:white;
            padding-left: 30px;

        }

        .divContenedor input:checked + label,
        .divContenedor input:checked + label:hover{
            background: #1A9EE2;
            color: white;

        }

        .divContenedor input{


        }

        .divContenedor input[type="checkbox"]{

            display: none;

        }

        .divContenedor input[type="text"]{

            width: 90%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 10px;
            height: 25px;
            font-size: 17.5px;

        }

        .divContenedor .texto{
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

        .divContenedor .texto p{
            color: black;
            font-size: 20px;
            padding: 10px;
            margin-top: 0px;

        }

        .divContenedor input:checked ~ .texto{
            height: auto;
        }

        form{

            padding: 20px;

        }

    </style>


</head>
<body>

    <section style="text-align: center; background: white; box-shadow: 0px 0px 5px black; padding: 15px;">

        <img class="img-center" style="border-radius: 50%; box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.6);" width="150" height="150" src="../../<?php echo $row['avatar']; ?>">

        <p class="text-center" style="font-size: 25px; margin-bottom: 5px;"><?php echo $row['name']; ?></p>

        <small style="color: rgba(0, 0, 0, 0.6);"><?php echo $row['fecha_registro']; ?></small>

    </section>

    <br><br>

    <div class="divContenedor">
        <div>
            <input id="check1" type="checkbox">
            <label for="check1" class="label">Asignaturas</label>
            <div class="texto">
                <p>Estas son las asignaturas que tienes:</p>

                <ul style="font-size: 20px; margin-top: -15px;">

                    <?php

$query = mysqli_query($link,"SELECT nombre FROM asignaturas WHERE user = '$nombre'");

while($while = mysqli_fetch_assoc($query)){

    foreach($while as $asignatura){

        echo "<li style='color: black;'>".$asignatura."</li>";



    }

}

                    ?>

                </ul>

                <div style="text-align: center">

                    <a class="button_modif" onclick="$('#modif_asig').cargar4('apps/profile/asignaturas/index.php');">Modificar</a>

                </div>

                <br>

                <section id="modif_asig"></section>

            </div>
        </div>
        <br>


        <!--<div>
<input id="check2" type="checkbox">
<label for="check2"  class="label">Medias</label>
<div class="texto">
<?php

/*


$query = mysqli_query($link,"SELECT nombre FROM asignaturas WHERE user = '$nombre'");

while($while = mysqli_fetch_assoc($query)){

    foreach($while as $asignatura){

        echo $asignatura;

        $query = mysqli_query($link,"SELECT nota_asignatura FROM notas WHERE nombre_asignatura = '$asignatura' && user = '$nombre'");

        while($while = mysqli_fetch_assoc($query)){

            foreach($while as $nota){

                echo $nota;

            }

        }

    }

}


*/
?>

</div>

</div>
-->
        <br>
        <div>
            <input id="check3" type="checkbox">
            <label for="check3"  class="label">Horario</label>
            <div class="texto" style="text-align: center">
                <br>

                <?php

if ($result = mysqli_query($link, "SELECT lunes FROM horario WHERE user = '$nombre'")) {

    /* determinar el número de filas del resultado */
    $numero = mysqli_num_rows($result);

    if($numero == 0){


        echo "<p style='color: black'>No hay ningún horario creado</p>";


    }else{

                ?>

                <a href="#" class="button_modif" onclick="$('#horario_modif').cargar5('apps/profile/horario/index.php');">Modificar</a>

                <br><br>

                <section id="horario_modif"></section>

                <a href="apps/profile/horario/borrar.php" class="button_close">Borrar</a>
                <br><br>


                <?php

    }

}

                ?>
            </div>
        </div>


        <!--        <div>
<input id="check4" type="checkbox">
<label for="check4">Jueves</label>
<div class="texto">
<input type="text" name="jueves1">
<input type="text" name="jueves2">
<input type="text" name="jueves3">
<input type="text" name="jueves4">
<input type="text" name="jueves5">
<input type="text" name="jueves6">
</div>
</div>
<div>
<input id="check5" type="checkbox">
<label for="check5">Viernes</label>
<div class="texto">
<input type="text" name="viernes1">
<input type="text" name="viernes2">
<input type="text" name="viernes3">
<input type="text" name="viernes4">
<input type="text" name="viernes5">
<input type="text" name="viernes6">
</div>


-->

    </div>
    <br><br>
    <script>
        jQuery.fn.cargar4 = function(url) {
            $(document).ready(function(){
                $("#modif_asig").load(url);
            });
        };
    </script>

    <script>
        jQuery.fn.cargar5 = function(url) {
            $(document).ready(function(){
                $("#horario_modif").load(url);
            });
        };
    </script>


</body>