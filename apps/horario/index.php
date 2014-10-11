

<head>

    <link href="apps/horario/horario.css" rel="stylesheet" type="text/css">
    <meta charset="iso-8859-1">
    <style>

        *{

            color: black;

        }

        td{
         
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            font-size: 14px;
        }
        
        th{
         
            height: 30px;
            text-align: center;
            
        }

    </style>

</head>
<body>
<?php

include("../../resources/conexion.php");

$query_lunes = mysqli_query($link,"SELECT lunes FROM horario");

while($row = mysqli_fetch_array($query_lunes)){
 
    foreach ($row as $hola)
    
    echo $hola;
    
}

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

            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>
            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>
            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>


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

            <tr>

                <td>Orientación </td>

                <td>Orientación </td>
                
            </tr>
            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>
            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

            
            <tr>

                <td>Orientación </td>

                <td>Orientación </td>

            </tr>

        </tbody>

    </table>

</body>