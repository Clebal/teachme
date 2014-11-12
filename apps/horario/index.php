<?php

include("../../resources/conexion.php");

?>

<head>
    
    <script>
        jQuery.fn.cargar3 = function(url) {
            $(document).ready(function(){
                $("#registrar_tabla").load(url);
            });
        };
    </script>
    
    <link href="apps/horario/horario.css" rel="stylesheet" type="text/css">
    
    <style>
    
        table{
         
            color: black;
            
        }
    
    </style>
    
</head>

<body>

    <?php

session_start();

$nombre = $_SESSION['nombre'];

if ($result = mysqli_query($link, "SELECT lunes FROM horario WHERE user = '$nombre'")) {

    /* determinar el número de filas del resultado */
    $numero = mysqli_num_rows($result);

    if($numero == 0){

    ?>

    <div class="text-center">

        <br>

        <a class="button" onclick="$('#registrar_tabla').cargar3('apps/horario/crear/index.php');">Crear Horario</a>

    </div>

    <br>

    <div id="registrar_tabla"></div>

    <?php

    }else{

        $query_uno = mysqli_query($link,"SELECT lunes, martes, miercoles FROM horario WHERE user = '$nombre'");
        $query_dos = mysqli_query($link,"SELECT jueves, viernes FROM horario WHERE user = '$nombre'");

    ?>

    <table class="primary" style="width: 100%;">

        <thead>

            <tr>

                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>

            </tr>

        </thead>

        <tbody>

            <?php

        while($row = mysqli_fetch_array($query_uno)){

            ?>

            <tr>

                <td><?php echo $row['lunes']; ?></td>

                <td><?php echo $row['martes']; ?></td>

                <td><?php echo $row['miercoles']; ?></td>

            </tr>

            <?php

        }

            ?>

        </tbody>

    </table>

    <table class="primary" style="width: 100%; margin-bottom: 60px;">

        <thead>

            <tr>

                <th>Jueves</th>
                <th>Viernes</th>
            </tr>

        </thead>

        <tbody>

            <?php

        while($row = mysqli_fetch_array($query_dos)){

            ?>

            <tr>

                <td><?php echo $row['jueves']; ?></td>

                <td><?php echo $row['viernes']; ?></td>

            </tr>

            <?php

        }

            ?>

        </tbody>

    </table>



</body>

<?php

    }

}

?>