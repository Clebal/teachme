<head>

    <style>

        input, p, label, form{

            color: black;

    </style>

</head>

<body>

    <p style="padding: 10px"> ¿Problemas? ¿Dudas? ¿Ideas o Sugerencias? ¿Hay algo en el código que este dando fallos? No dude en contactar con Sukafe. <br><br> Tan sencillo como rellenar este formulario:</p>

    <br>

    <form name='formulario' id='formulario' method='post' action='apps/contacto/enviar.php' target='_self' enctype="multipart/form-data">

        <div style="display: block; text-align: center">
        
        <label>Nombre</label><br>

            <input type='text' name='name' required><br><br>

        </div>

        <div style="display: block; text-align: center">
        
        <label>E-mail</label><br>

            <input type='email' name='email' required><br><br>

        </div>

        <label style="margin-left: 15px;">Descripción breve</label><br>

        <div style="display: block; text-align: center">

            <textarea type="text" name="descripcion" cols="30" rows="7" style="resize: none" required></textarea><br><br>

        </div>

        <div style="display: block; text-align: center;">

            <div class="button">

                <input type="submit" value="Enviar" style="width: 100%; background: 0; border: 0; color: white; font-size: 17px;">

            </div>

        </div>


    </form>

    <br><br><br>

</body>