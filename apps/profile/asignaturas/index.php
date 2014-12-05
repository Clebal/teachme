<?php

include ("../../../resources/conexion.php");

session_start();

$nombre = $_SESSION['nombre'];

$query = mysqli_query($link, "SELECT * FROM usuarios WHERE name = '$nombre'");

$row = mysqli_fetch_array($query);

?>

<head>

    <meta charset="utf-8">

    <style>


        #borrar:before{

            content: "X";
            font-weight: bold;
            color: white;
            text-shadow: 0px 0px 1px gray;
            right: 6px;
            background: red;
            padding: 0px 5px 0px 5px;
            border-radius: 100px;
            float: right;

        }

        #btnDel:before{

            content: "-";
            margin-bottom: 10px;

        }

        #btnAdd:before{

            content: "+";

        }

    </style>

    <!-- Añadir campos -->

    <script>
        jQuery( function ( $ ) {
            $( '#btnAdd' ).click( function() {
                var num = $( '.clonedInput' ).length;		// how many "duplicatable" input fields we currently have
                var newNum	= new Number( num + 1 );		// the numeric ID of the new input field being added
                var newElem = $( '#input' + num ).clone().attr( 'id', 'input' + newNum );

                newElem.children( ':first' ).attr( 'id', 'name' + newNum ).attr( 'name', 'asignatura' + newNum );
                $( '#input' + num ).after( newElem );
                $( '#btnDel' ).attr( 'disabled', false );
                if ( newNum == 100 )
                    $( '#btnAdd' ).attr( 'disabled', 'disabled' );
            });

            $( '#btnDel' ).click( function() {
                var num = $( '.clonedInput' ).length;		// how many "duplicatable" input fields we currently have
                $( '#input' + num ).remove();				// remove the last element
                $( '#btnAdd' ).attr( 'disabled', false );	// enable the "add" button

                // if only one element remains, disable the "remove" button
                if ( num-1 == 1 )
                    $( '#btnDel' ).attr( 'disabled', 'disabled' );
            });

            $( '#btnDel' ).attr( 'disabled', 'disabled' );
        });
    </script>

</head>
<body>

    <section style="background: white; padding: 15px;">

        <ul style="font-size: 20px; margin-top: -15px; color: black;">

            <?php

$query = mysqli_query($link,"SELECT nombre, id FROM asignaturas WHERE user = '$nombre'");

while($asignatura = mysqli_fetch_array($query)){


            ?>

            <li style="color: black;"><?php echo $asignatura['nombre']; ?><a href='apps/profile/asignaturas/borrar.php?id="<?php echo $asignatura['id']; ?>"'><div style="float:right"><div id='borrar' style="float: right; border-radius: 100px;"></div></div></a></li><br>

            <?php


}

            ?>
        </ul>

        <br>

        <hr>

        <br>

        <form action="apps/profile/asignaturas/crear.php" method="post">

            <label style="margin-left: 15px; font-size: 20px; color: black;">A&ntilde;ade nuevas asignaturas</label>
            <div id="input1" class="clonedInput">
                <input type="text" name="asignatura1" style="font-size: 15px; display: block;" class="input" id="name1 input1" onfocus="if(this.value!=='') this.value=''" onblur="if(this.value=='') this.value=''" autofocus="autofocus" required>
                <br>
            </div>

            <div style="text-align: center">

                <a id="btnAdd" class="button" style="background: green;"></a>

                <a id="btnDel" class="button" style="background: red;"></a>

                <br><br>

                <div class="button" style="text-align: center">

                    <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

                </div>

            </div>

        </form>

    </section>




</body>