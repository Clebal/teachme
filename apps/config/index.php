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

        .drag-drop {
            height: 8em;
            width: 8em;
            background-color: dodgerblue;
            border-radius: 4em;
            text-align: center;
            color: white;
            position: relative;
            margin: 0 auto 1em;
        }

        input[type="file"] {
            height: 10em;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 3;
        }

        .fa-stack {
            margin-top: .5em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-stack .bottom {
            color: rgba(225, 225, 225, .75);
        }
        .fa-stack-2x {
            font-size: 2em;
        }

        .fa-stack {
            position: relative;
            display: inline-block;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }

        .fa-stack .medium {
            color: white;
            text-shadow: 0 0 .25em #666;
        }

        .fa-stack .top {
            color: white;
        }

        .fa-stack-1x {
            line-height: inherit;
        }

        .fa-stack-1x, .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .fa {
            display: inline-block;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .drag-drop span.desc {
            display: block;
            font-size: .7em;
            padding: 0 .5em;
            color: #fff;
        }

        .divContenedor{
            width: 100%;
            text-align: left;
        }

        .divContenedor label{

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

        .divContenedor label:hover{
            background: #1f96d3;
            color:white;
            padding-left: 30px;

        }

        .divContenedor input:checked + label,
        .divContenedor input:checked + label:hover{
            background: #1A9EE2;
            color: white;

        }

        .divContenedor input{

            display: block;

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
            color: #777;
            line-height: 23px;
            font-size: 14px;
            padding: 20px;
        }

        .divContenedor input:checked ~ .texto{
            height: auto;
        }

        .thumb{

            border-radius: 100px;
            width: 150px;
            height: 150px;
            position: absolute;
            top: 0;
            left: 0;
            margin-left: -10px;
            margin-top: -10px;

        }

    </style>

</head>
<body>
    <div class="divContenedor" style="height: auto;">
        <div>
            <input id="check1" type="checkbox">
            <label for="check1">Datos</label>
            <div class="texto">
                <p style="color: black; padding: 0; padding-left: 15px; font-size: 20px;">Estos son tus datos:</p>
                <ul style="color: black;">

                    <li>Nombre: <?php echo $row['name']; ?></li>
                    <li>Email: <?php echo $row['email']; ?></li>
                    <li>País: <?php echo $row['pais']; ?></li>
                    <li>Curso: <?php echo $row['curso']; ?></li>

                </ul>

                <br>

                <div style="text-align: center">

                    <a href="#" class="button_modif" onclick="$('#datos').cargar6('apps/config/datos/index.php');">Modificar</a>

                </div>

                <br><br>

                <section id="datos"></section>

            </div>
        </div>
        <div>
            <input id="check2" type="checkbox">
            <label for="check2">Foto de Perfil</label>
            <div class="texto">

                <br><br>

                <form action="apps/config/imagen/profile_image.php" method="post" enctype="multipart/form-data">

                    <div class="drag-drop">

                        <input type="file" id="files" name="imagen" class="image-1" required>

                        <output id="list" class="image-2"></output>

                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>

                        <span class="desc" style="color: white;">Pulse aquí para añadir una nueva imagen</span>



                    </div>

                    <br>

                    <div style="display: block; text-align: center;">

                        <div class="button">

                            <input type="submit" name="subir" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

                        </div>

                    </div>

                </form>
                <br>

            </div>
        </div>
        <!--<div>
<input id="check3" type="checkbox">
<label for="check3">Informaci&oacute;n Academica</label>
<div class="texto">
<input type="text" name="miercoles1">
<input type="text" name="miercoles2">
<input type="text" name="miercoles3">
<input type="text" name="miercoles4">
<input type="text" name="miercoles5">
<input type="text" name="miercoles6">
</div>
</div>-->
        <div>
            <input id="check4" type="checkbox">
            <label for="check4">Sukafe</label>
            <div class="texto">
                <p style="color: black; padding: 0; padding-left: 15px; padding-right: 15px; font-size: 17px;">Sukafe es un grupo de desarrolladores españoles ubicados en Sevilla, los cuales han desarrollado Teach Me para ayudarte a organizarte y a avanzar en tus estudios.</p>
            </div>
        </div>
    </div>
    <br>

    <br><br><br>

    <script>
        jQuery.fn.cargar6 = function(url) {
            $(document).ready(function(){
                $("#datos").load(url);
            });
        };
    </script>

    <!-- Input - Image -->

    <script>
        function archivo(evt) {
            var files = evt.target.files; // FileList object

            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        // Insertamos la imagen
                        document.getElementById("list").innerHTML = ['<img class="thumb" style="border-radius: 100px; width: 150px; height: 150px; position: absolute; top: 0; left: 0; margin-left: -10px; margin-top: -10px;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);

                reader.readAsDataURL(f);
            }
        }

        document.getElementById('files').addEventListener('change', archivo, false);
    </script>

</body>