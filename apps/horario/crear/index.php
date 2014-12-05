<head>
    <meta charset="iso-8859-1">


    <style>

        *{

            color: black;

        }

        .divContenedor{
            width: 100%;
            height: 100%;
            margin: 10px auto 30px auto;
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
            height: 255px;
        }

        form{

            padding: 20px;

        }

    </style>

</head>
<body>
    <form action="apps/horario/crear/crear.php" method="post">
        <div class="divContenedor">
            <div>
                <input id="check1" type="checkbox">
                <label for="check1">Lunes</label>
                <div class="texto">
                    <input type="text" name="lunes1" required>
                    <input type="text" name="lunes2" required>
                    <input type="text" name="lunes3" required>
                    <input type="text" name="lunes4" required>
                    <input type="text" name="lunes5" required>
                    <input type="text" name="lunes6" required>
                    <br><br>
                </div>
            </div>
            <div>
                <input id="check2" type="checkbox">
                <label for="check2">Martes</label>
                <div class="texto">
                    <input type="text" name="martes1" required>
                    <input type="text" name="martes2" required>
                    <input type="text" name="martes3" required>
                    <input type="text" name="martes4" required>
                    <input type="text" name="martes5" required>
                    <input type="text" name="martes6" required>
                </div>
            </div>
            <div>
                <input id="check3" type="checkbox">
                <label for="check3">Miercoles</label>
                <div class="texto">
                    <input type="text" name="miercoles1" required>
                    <input type="text" name="miercoles2" required>
                    <input type="text" name="miercoles3" required>
                    <input type="text" name="miercoles4" required>
                    <input type="text" name="miercoles5" required>
                    <input type="text" name="miercoles6" required>
                </div>
            </div>
            <div>
                <input id="check4" type="checkbox">
                <label for="check4">Jueves</label>
                <div class="texto">
                    <input type="text" name="jueves1" required> 
                    <input type="text" name="jueves2" required>
                    <input type="text" name="jueves3" required>
                    <input type="text" name="jueves4" required>
                    <input type="text" name="jueves5" required>
                    <input type="text" name="jueves6" required>
                </div>
            </div>
            <div>
                <input id="check5" type="checkbox">
                <label for="check5">Viernes</label>
                <div class="texto">
                    <input type="text" name="viernes1" required>
                    <input type="text" name="viernes2" required>
                    <input type="text" name="viernes3" required>
                    <input type="text" name="viernes4" required>
                    <input type="text" name="viernes5" required>
                    <input type="text" name="viernes6" required>
                </div>
            </div>
        </div>
        <br>

        <div style="display: block; text-align: center;">

            <div class="button">

                <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

            </div>

        </div>

        <br><br><br>

    </form>
</body>