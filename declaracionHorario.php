<?php
$origen1_3 = $_POST["origen1_3"];
$tipoEvento3 = $_POST["tipoEvento3"];
$clasificacionEvento2 = $_POST["clasificacionEvento2"];

$tituloEvento = $_POST["tituloEvento"];
$descripcionEvento = $_POST["descripcionEvento"];
$cantidadPersonas = $_POST["cantidadPersonas"];
?>
<!DOCTYPE html> <!-- 6 -->
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
                <td id = "seleccionHorario">
                    <h2><center>SELECCIÓN DEL HORARIO</center></h2>
                </td>
            </tr>
        </table>
    </center>

    <form action = "equipoPorSolicitar.php" method = "POST">
            <?php
                echo <<< EOT
                <input type="hidden" id="origen1_4" name="origen1_4" value="$origen1_3">
                <input type="hidden" id="tipoEvento4" name="tipoEvento4" value="$tipoEvento3">
                <input type="hidden" id="clasificacionEvento3" name="clasificacionEvento3" value="$clasificacionEvento2">
                <input type="hidden" id="tituloEvento2" name="tituloEvento2" value="$tituloEvento">
                <input type="hidden" id="descripcionEvento2" name="descripcionEvento2" value="$descripcionEvento">
                <input type="hidden" id="cantidadPersonas2" name="cantidadPersonas2" value="$cantidadPersonas">
                EOT;
            ?>
        <fieldset>
            <legend><b>Seleccione el día y hora de inicio del evento:</b></legend>
            <label for="inicioEventoF">Fecha: </label>
            <input type="date" id="inicioEventoF" name="inicioEventoF" value="" min = "2024-01-01" max = "2024-12-31">

            <label for="inicioEventoT">Hora: </label>
            <input type="time" id="inicioEventoT" name="inicioEventoT" value="">
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b>Seleccione el día y hora de finalización del evento</b></legend>
            <label for="finalEventoF">Fecha: </label>
            <input type="date" id="finalEventoF" name="finalEventoF" value="" checked>

            <label for="finalEventoT">Hora: </label>
            <input type="time" id="finalEventoT" name="finalEventoT" value="">
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b>¿Cuál será la duración del evento?</b></legend>
            <input type="radio" id="duracionEvento" name="duracionEvento" value="permanente" checked>
            <label for="duracionEvento">Permanente</label><br>

            <input type="radio" id="duracionEvento" name="duracionEvento" value="temporal">
            <label for="duracionEvento">Temporal</label><br>
        </fieldset>
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

    </form>
</body>
</html>