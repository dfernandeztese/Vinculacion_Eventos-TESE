<?php
$origen1_2 = $_POST["origen1"];
$tipoEvento = $_POST["tipoEvento"];
?>
<!DOCTYPE html> <!-- 4 -->
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
                <td id = "tipoEvento">
                    <h2><center>TIPO DE EVENTO</center></h2>
                </td>
            </tr>
        </table>
    </center>
    <form action = "tipoEventoConfirmacion.php" method = "POST">
    <?php
    if(strcmp($tipoEvento, "artistico") == 0){
        echo <<< EOT
        <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
        <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
        <fieldset>
        <legend><b>¿Que tipo de evento Artístico se realizará?</b></legend>
        <table>
            <tr>
                <td>
                <br><br><br><br><br><br><br>
                <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton" ><span>REGRESAR</span></button>
                </td>
                <td>
                <p>Tipo de Evento:</p>
                <select name = "clasificacionEvento" id = "gen">
                    <option value = "danza">Danza</option>
                    <option value = "pintura - abstracto">Pintura - Abstracto</option>
                    <option value = "pintura - expresionismo">Pintura - Expresionismo</option>
                    <option value = "pintura - hiperrealismo">Pintura - Hiperrealismo</option>
                    <option value = "pintura - realismo">Pintura - Realismo</option>
                    <option value = "pintura - otro">Pintura - Otro</option>
                    <option value = "teatro">Teatro</option>
                    </select>
                </td>
                <td>
                    <br><br><br><br><br><br><br>
                    <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                </td>
            </tr>
        </table>
        </fieldset>
        EOT;
    }

    if(strcmp($tipoEvento, "conferencia") == 0){
        echo <<< EOT
        <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
        <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
        <fieldset>
            <legend><b>¿Que tipo de Conferencia se realizará?</b></legend>
            <table>
                <tr>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton" ><span>REGRESAR</span></button>
                    </td>
                    <td>
                        <p>Tipo de Evento:</p>
                        <select name = "clasificacionEvento" id = "gen">
                            <option value = "internacional">Internacional</option>
                            <option value = "magistral">Magistral</option>
                        </select>
                    </td>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                    </td>
                </tr>
            </table>
        </fieldset>
        EOT;
    }

    if(strcmp($tipoEvento, "exposicion") == 0){
        echo <<< EOT
        <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
        <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
        <fieldset>
            <legend><b>¿Que tipo de Exposición se realizará?</b></legend>
            <table>
                <tr>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton" ><span>REGRESAR</span></button>
                    </td>
                    <td>
                        <p>Tipo de Evento:</p>
                        <select name = "clasificacionEvento" id = "gen">
                            <option value = "internacional">Internacional</option>
                            <option value = "magistral">Magistral</option>
                        </select>
                    </td>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                    </td>
                </tr>
            </table>
        </fieldset>
        EOT;
    }

    if(strcmp($tipoEvento, "torneo de ajedrez") == 0){
        echo <<< EOT
        <fieldset>
            <legend><b>Usted seleccionó "Torneo de Ajedrez", Para continuar seleccione el botón "SIGUIENTE"</b></legend>
            <table>
                <tr>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton" ><span>REGRESAR</span></button>
                    </td>
                    <td>
                        <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
                        <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
                        <input type="hidden" id="clasificacionEvento" name="clasificacionEvento" value="no tiene clasificacion">
                    </td>
                    <td>
                        <br><br><br><br><br><br><br>
                        <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                    </td>
                </tr>
            </table>
        </fieldset>
        EOT;
    }
    ?>
</form>
</body>
</html>