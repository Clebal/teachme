<?php

include ("resources/conexion.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no">

        <title>Teach Me - SDT</title>

        <!-- Menú Lateral -->

        <link rel="stylesheet" type="text/css" href="css/menu-lateral.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />

        <!-- Menú Superior -->

        <link rel="stylesheet" type="text/css" href="css/menu-superior.css">

        <!-- Main -->

        <link rel="stylesheet" type="text/css" href="css/main.css" />

        <style>

            .mensaje{

                -webkit-animation: myfirst 5s; /* Chrome, Safari, Opera */
                animation: myfirst 5s;

                background: green;

                height: 50px;

                opacity: 0;

                padding-top: 15px;

            }

            .mensaje:before{

                content: "<?php echo base64_decode ($_GET['m']) ?>";
                color: white;
                padding: 35px;
                margin-top: 60px;

            }

            /* Chrome, Safari, Opera */
            @-webkit-keyframes myfirst {
                from {opacity: 1}
                to {opacity: 0;}
            }

            /* Standard syntax */
            @keyframes myfirst {
                from {opacity: 1}
                to {opacity: 0;}
            }



        </style>

    </head>
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
                                <li><span aria-hidden="true" class="icon-envelope-alt"></span> Messaggi</li>
                                <li><span aria-hidden="true" class="icon-user"></span> Mio Profilo</li>
                                <li><span aria-hidden="true" class="icon-cog"></span> Impostazioni</li>
                                <li><span aria-hidden="true" class="icon-off"></span> Log Out</li>
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
                <li><a href="#" class="icon-calendar">Calendar</a></li>
                <li><a href="#" class="icon-ask2">Ask</a></li>
                <li><a href="#" class="icon-smile" onclick="$('#main').cargar('apps/powered/index.html');">Addons Utilizados</a></li>
            </ul>
        </nav>

        <div id="main">

            <?php

    if(isset($_GET['m'])){

    echo "<div class='mensaje'></div>";   

}

            ?>

        </div>

        <script src="js/jquery.min.js"></script>
        <script>
            jQuery.fn.cargar = function(url) {
                $(document).ready(function(){
                    $("#main").load(url);
                });
            };
        </script>

    </body>

</html>