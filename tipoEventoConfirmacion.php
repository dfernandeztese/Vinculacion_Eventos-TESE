<?php
$origen1_2 = $_POST["origen1_2"];
$tipoEvento2 = $_POST["tipoEvento2"];
$clasificacionEvento = $_POST["clasificacionEvento"];
?>
<!DOCTYPE html> <!-- 5 -->
<html lang="en">
<head>
    <link rel="stylesheet" href="css/hojaEstilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body id = "gen">
    <!-- Titulo -->
    <center>
        <table width="1335px">
            <tr>
                <td id = "informacionEvento">
                    <h2><center>INFORMACIÓN SOBRE EL EVENTO</center></h2>
                </td>
            </tr>
        </table>
    </center>
    <form action = "declaracionHorario.php" method = "POST">
        <fieldset>
            <legend><b>Informacion Sobre EL Evento</b></legend>
            <?php
                echo <<< EOT
                <input type="hidden" id="origen1_3" name="origen1_3" value="$origen1_2">
                <input type="hidden" id="tipoEvento3" name="tipoEvento3" value="$tipoEvento2">
                <input type="hidden" id="clasificacionEvento2" name="clasificacionEvento2" value="$clasificacionEvento">
                EOT;
            ?>
            <label for="tituloEvento">Introduzca EL Nombre/Titulo Del Evento: </label>
            <input type="text" id="gen" name="tituloEvento" size = "25" placeholder = "Escriba aquí el título." value="" ><br><br>

            <label for="descripcionEvento">Introduzca Una Descripcion Para EL Evento: </label><br>
            <textarea name = "descripcionEvento" id = "gen" rows = "10" cols = "142" placeholder = "Descripción"></textarea><br><br>

            <label for="cantidadPersonas">Defina La Cantidad Maxima De Personas Que Podran Asistir Al Evento: </label>
            <input type="number" id="gen" name="cantidadPersonas" min="1" max="150" ><br>
            <img src = "Images/nota1.png" width = "180px">
            <table>
                <tr>
                    <td>
                        <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton" ><span>REGRESAR</span></button>
                    </td>
                    <td>
                        <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>