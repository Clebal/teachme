<?php

include ("resources/conexion.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <title>Teach Me - SDT</title>

        <!-- Menú Lateral -->

        <link rel="stylesheet" type="text/css" href="css/menu-lateral.css">
        <link rel="stylesheet" type="text/css" href="css/component.css">

        <!-- Menú Superior -->

        <link rel="stylesheet" type="text/css" href="css/menu-superior.css">

        <!-- Main -->

        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- Horario -->

        <link href="apps/horario/horario.css" rel="stylesheet" type="text/css">

        <!-- Alertify.js -->

        <link rel="stylesheet" href="css/alertify.core.css">
        <link rel="stylesheet" href="css/alertify.default.css">

        <style>

            .mensaje:before{

                content: "\f087";
                font-family: 'fontawesome';
                color: #1A9EE2;
                display: block;
                font-size: 100px;
                text-align: center;
                padding-top: 50px;
                -webkit-animation: color 5s; /* Chrome, Safari, Opera */
                animation: color 5s;

            }

            /* Chrome, Safari, Opera */
            @-webkit-keyframes color {
                from {color: white}
                to {color: #1A9EE2;}
            }

            /* Standard syntax */
            @keyframes color {
                from {color: white}
                to {color: #1A9EE2;}
            }
            
            .main{
             
                overflow: hidden;
                
            }

        </style>

    </head>

    <?php

session_start();

if(isset($_SESSION['nombre'])){

    ?>

    <body>

        <nav id="menu-superior">
            <ul>
                <li class="drop">

                    <div class="user-avatar">
                        <img src="https://lh4.googleusercontent.com/-miJ4f0bUmDY/AAAAAAAAAAI/AAAAAAAAAAA/lsy2nCXjb1k/s32-c/photo.jpg" alt="">
                    </div>
                    <a href="#">Sergio Clebal</a>

                    <div aria-hidden="true" class="icon-reorder orange-txt"><span class="box-shadow-menu"></span></div>
                    <div class="triangle"></div>


                    <div class="dropdownContain">
                        <div class="dropOut">
                            <ul>
                                <li onclick="$('#main').cargar('apps/profile/index.php');">&nbsp;&nbsp;&nbsp;Ver perfil</li>
                                <li>&nbsp;&nbsp;&nbsp;Configuraci&oacute;n</li>
                                <li>&nbsp;&nbsp;&nbsp;Cr&eacute;ditos</li>
                                <li><a href="resources/cerrar.php" style="line-height: 0em; padding: 0em; font-size: 15px; color: gray;">&nbsp;&nbsp;&nbsp;Cerrar Sesi&oacute;n</a></li>
                            </ul>
                        </div>
                    </div>

                </li>
            </ul>
        </nav>

        <nav id="menu-lateral">
            <ul class="cbp-vimenu">
                <li><a href="#" class="icon-logo">Logo</a></li>
                <li><a href="apps/notas/www/index.html" class="icon-write">Add Notes</a></li>
                <li><a href="#" class="icon-music" onclick="$('#main').cargar('apps/musica/index.html');">Music</a></li>
                <li><a href="#" class="icon-book" onclick="$('#main').cargar('apps/nota/index.php');">Notas</a></li>
                <!-- Example for active item:<li class="cbp-vicurrent"><a href="#" class="icon-pencil">Pencil</a></li>-->
                <li><a href="#" class="icon-horario" onclick="$('#main').cargar('apps/horario/index.php');">Horario</a></li>
                <li><a href="#" class="icon-calendar" onclick="$('#main').cargar('apps/calendario/index.php');">Calendar</a></li>
                <li><a href="#" class="icon-ask2">Ask</a></li>
                <li><a href="#" class="icon-smile" onclick="$('#main').cargar('apps/powered/index.html');">Addons Utilizados</a></li>
            </ul>
        </nav>

        <div id="main">

            <?php

    if(isset($_GET['m'])){ if($_GET['m'] == 0){ echo "<div class='mensaje'></div>";}}

            ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>
            jQuery.fn.cargar = function(url) {
                $(document).ready(function(){
                    $("#main").load(url);
                });
            };
        </script>

        <script src="js/heyoffline.js" type="text/javascript"></script>
        <script src="js/alertify.js" type="text/javascript"></script>
        <script type="text/javascript">

            //online
            window.addEventListener('online', function(){alertify.success('You are online')}, true);
            //offline
            window.addEventListener('offline', function(){alertify.error('You are offline')}, false);

        </script>


    </body>

    <?php

}else{

    ?>

    <body>

        <header>

            <h1 style="color: white; font-weight: 300; font-family: 'lato'; text-align: center; font-size: 50px; text-shadow: 1px 1px 5px black;">Teach Me</h1>

        </header>

        <section style="display: block; margin: auto;">

            <h2 style="color: white; font-weight: 300; font-family: 'lato'; text-align: center; text-shadow: 1px 1px 5px black;">Relájate y estudia,<br> nosotros pondremos el resto</h2>

            <br><br>

            <article style="text-align: center">

                <div style="display: inline" class="my_popup_open">

                    <a href="#" class="button"><p style="margin-top: -1.5px; color: white;">Iniciar sesión</p></a>

                </div>

                <br><br>

                <div style="display: inline" class="basic_open">

                    <a href="#" class="button_sign"><p style="margin-top: -1.5px; color: white;">Regístrate</p></a>

                </div>

            </article>

        </section>

        <br><br>

        <footer style="text-align: center; font-weight: 300; font-family: 'lato'; text-align: center; text-shadow: 1px 1px 5px black; color: white;">

            <small>Creado por Sukafe</small>

        </footer>

        <!-- Iniciar Sesión - PopUp -->
        <div id="my_popup">

            <form method="post" action="resources/login.php">

                <input type="text" name="username" class="input" placeholder="Usuario o Email" autocomplete="off"><br><br>

                <input type="password" name="password" class="input" placeholder="Contraseña"><br><br>

                <div class="button" style="float: right;">
                    <input type="submit" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;" value="Enviar">
                </div>

            </form>

            <!-- Add an optional button to close the popup -->
            <a href="#" class="my_popup_close button_close">Cerrar</a>

        </div>

        <!-- Registro - PopUp -->
        <div id="basic">

            <form>

                <input type="text" name="" class="input" placeholder="Usuario"><br><br>

                <input type="password" name="" class="input" placeholder="Contraseña"><br><br>

                <input type="email" name="" class="input" placeholder="Email"><br><br>

                <input type="date" name="" class="input" placeholder="12/02/1997"><br><br>

                <input type="file" name="file">

                <br><br>

                <div class="button" style="float: right;">
                    <input type="submit" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;" value="Enviar">
                </div>

            </form>

            <!-- Add an optional button to close the popup -->
            <a href="#" class="basic_close button_close">Cerrar</a>

        </div>


        <!-- Include jQuery -->
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

        <!-- Include jQuery Popup Overlay -->
        <script src="http://vast-engineering.github.io/jquery-popup-overlay/jquery.popupoverlay.js"></script>

        <script>
            $(document).ready(function() {

                // Initialize the plugin
                $('#my_popup').popup(
                    {
                        transition: 'all 0.3s',
                        scrolllock: true // optional
                    });

            });
        </script>

        <script>
            $(document).ready(function() {

                // Initialize the plugin
                $('#basic').popup(
                    {
                        transition: 'all 0.3s',
                        scrolllock: true // optional
                    });

            });
        </script>

        <script src="js/jquery.si.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".file").si();
            });
        </script>

        <script src="js/heyoffline.js" type="text/javascript"></script>
        <script src="js/alertify.js" type="text/javascript"></script>
        <script src="js/backstretch.js" type="text/javascript"></script>

        <script type="text/javascript">

            $.backstretch([
                "img/1.jpg",
                "img/2.jpg", 
                "img/3.jpg"
            ], {duration: 5000, fade: 750});

        </script>

        <script type="text/javascript">

            //online
            window.addEventListener('online', function(){alertify.success('You are online')}, true);
            //offline
            window.addEventListener('offline', function(){alertify.error('You are offline')}, false);

        </script>

    </body>


    <?php

}

    ?>

</html>