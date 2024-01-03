<?php
$origen1_3 = $_POST["origen1_3"];
$tipoEvento3 = $_POST["tipoEvento3"];
$clasificacionEvento2 = $_POST["clasificacionEvento2"];

$tituloEvento = $_POST["tituloEvento"];
$descripcionEvento = $_POST["descripcionEvento"];
$cantidadPersonas = $_POST["cantidadPersonas"];

/*echo $origen1_3."<br>";
echo $tipoEvento3."<br>";
echo $clasificacionEvento2."<br>";

echo $tituloEvento."<br>";
echo $descripcionEvento."<br>";
echo $cantidadPersonas."<br>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
    <h4><center>DATOS DEL EVENTO POR PROGRAMAR</center></h4>
    <h5><center>SELECCIÓN DEL HORARIO</center></h5>
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
            <legend><b>Seleccione El Día y Hora De Inicio Del Evento</b></legend>
            <input type="datetime-local" id="inicioEvento" name="inicioEvento" value="">
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b>Seleccione El Día y Hora De Finalización Del Evento</b></legend>
            <input type="datetime-local" id="finalEvento" name="finalEvento" value="">
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b>¿Cual Sera La Duración Del Evento?</b></legend>
            <input type="radio" id="duracionEvento" name="duracionEvento" value="permanente">
            <label for="duracionEvento">Permanente</label><br>

            <input type="radio" id="duracionEvento" name="duracionEvento" value="temporal">
            <label for="duracionEvento">Temporal</label><br>
        </fieldset>
        <table>
            <tr>
                <td>
                    <input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                </td>
                <td>
                    <input type = "submit" name = "siguiente" value = "SIGUIENTE">
                </td>
            </tr>
        </table>

    </form>
</body>
</html>