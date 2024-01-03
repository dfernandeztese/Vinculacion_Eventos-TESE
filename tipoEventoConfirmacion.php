<?php
$origen1_2 = $_POST["origen1_2"];
$tipoEvento2 = $_POST["tipoEvento2"];
$clasificacionEvento = $_POST["clasificacionEvento"];

/*echo $origen1_2."<br>";
echo $tipoEvento2."<br>";
echo $clasificacionEvento."<br>";*/
?>
<!DOCTYPE html> <!-- 5 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
<h4><center>DATOS DEL EVENTO POR PROGRAMAR</center></h4>
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
            <input type="text" id="tituloEvento" name="tituloEvento" value=""><br><br>

            <label for="descripcionEvento">Introduzca Una Descripcion Para EL Evento: </label><br>
            <textarea name = "descripcionEvento" rows = "10" cols = "160"></textarea><br><br>

            <label for="cantidadPersonas">Defina La Cantidad Maxima De Personas Que Podran Asistir Al Evento: </label>
            <input type="number" id="cantidadPersonas" name="cantidadPersonas" min="1" max="150">

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
        </fieldset>
    </form>
</body>
</html>