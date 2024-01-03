<?php
$origen1_2 = $_POST["origen1"];
$tipoEvento = $_POST["tipoEvento"];
?>
<!DOCTYPE html> <!-- 4 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
<h4><center>DATOS DEL EVENTO POR PROGRAMAR</center></h4>
    <form action = "tipoEventoConfirmacion.php" method = "POST">
        <fieldset>
            <table>
                <tr>
                        <?php
                            if(strcmp($tipoEvento, "artistico") == 0){
                                echo <<< EOT
                                <td>
                                    <legend><b>¿Que Tipo De Evento Artistico Se Realizará?</b></legend>
                                    <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
                                    <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
                                    <select name = "clasificacionEvento" >
                                        <option value = "danza">Danza</option>
                                        <option value = "pintura - abstracto">Pintura - Abstracto</option>
                                        <option value = "pintura - expresionismo">Pintura - Expresionismo</option>
                                        <option value = "pintura - hiperrealismo">Pintura - Hiperrealismo</option>
                                        <option value = "pintura - realismo">Pintura - Realismo</option>
                                        <option value = "pintura - otro">Pintura - Otro</option>
                                        <option value = "teatro">Teatro</option>
                                    </select>
                                    <br><br><br><br><br><br><br><br><input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                                </td>
                                <td>
                                    <br><br><br><br><br><br><br><br><input type = "submit" name = "siguiente" value = "SIGUIENTE">
                                </td>
                                EOT;
                            }

                            if(strcmp($tipoEvento, "conferencia") == 0){
                                echo <<< EOT
                                <td>
                                    <legend><b>¿Que Tipo De Conferencia Se Realizará?</b></legend>
                                    <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
                                    <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
                                    <select name = "clasificacionEvento" >
                                        <option value = "internacional">Internacional</option>
                                        <option value = "magistral">Magistral</option>
                                    </select>
                                    <br><br><br><br><br><br><br><br><input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                                </td>
                                <td>
                                    <br><br><br><br><br><br><br><br><input type = "submit" name = "siguiente" value = "SIGUIENTE">
                                </td>
                                EOT;
                            }

                            if(strcmp($tipoEvento, "exposicion") == 0){
                                echo <<< EOT
                                <td>
                                    <legend><b>¿Que Tipo De Exposición Se Realizará?</b></legend>
                                    <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
                                    <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
                                    <select name = "clasificacionEvento" >
                                        <option value = "naturaleza">Naturaleza</option>
                                        <option value = "proyecto">Proyecto</option>
                                        <option value = "tecnologia">Tecnologia</option>
                                        <option value = "otro">Otro</option>
                                    </select>
                                    <br><br><br><br><br><br><br><br><input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                                </td>
                                <td>
                                    <br><br><br><br><br><br><br><br><input type = "submit" name = "siguiente" value = "SIGUIENTE">
                                </td>
                                EOT;
                            }

                            if(strcmp($tipoEvento, "torneo de ajedrez") == 0){
                                echo <<< EOT
                                <legend><b>Usted Seleccionó "Torneo De Ajedrez", Para Continuar Seleccione El Botón "SIGUIENTE"</b></legend>
                                <td>
                                <input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                                </td>
                                <td>
                                    <input type="hidden" id="origen1_2" name="origen1_2" value="$origen1_2">
                                    <input type="hidden" id="tipoEvento2" name="tipoEvento2" value="$tipoEvento">
                                    <input type="hidden" id="clasificacionEvento" name="clasificacionEvento" value="no tiene clasificacion">
                                    <input type = "submit" name = "siguiente" value = "SIGUIENTE">
                                </td>
                                EOT;
                            }
                            ?>
                    </td>
                </tr>
            </table>
            
        </fieldset>
    </form>
</body>
</html>