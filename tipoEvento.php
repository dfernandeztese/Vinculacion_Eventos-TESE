<?php
$origen1 = $_POST["origen"];
//echo $origen1;
?>

<!DOCTYPE html> <!-- 3 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
    <h4><center>DATOS DEL EVENTO POR PROGRAMAR</center></h4>
    <form action = "clasificacionEvento.php" method = "POST">
        <fieldset>
            <legend><b>¿Que Tipo De Evento Realizará?</b></legend>
            <table> <!-- Definir Tabla-->
                <tr> <!-- Definir Fila -->
                    <td> <!-- Definir Columna-->
                        <label for="tipoEventoG"><b>Tipo De Evento: </b></label> <!--Titulo Tipo De Evento -->
                        <br><br><br><br><br><br><br><br><input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                    </td>
                    <td>
                        <?php
                        if(strcmp($origen1, "interno") == 0){
                            echo <<< EOT
                            <input type="hidden" id="origen1" name="origen1" value="$origen1">
                            <input type="radio" id="tipoEventoID" name="tipoEvento" value="artistico"> <!-- Opcion 1 -->
                            <label for="tipoEvento">Artístico</label><br>

                            <input type="radio" id="tipoEvento" name="tipoEvento" value="conferencia"> <!-- Opcion 1 - E -->
                            <label for="tipoEvento">Conferencia</label><br>

                            <input type="radio" id="tipoEvento" name="tipoEvento" value="exposicion"> <!-- Opcion 2 - E -->
                            <label for="tipoEvento">Exposición</label><br>

                            <input type="radio" id="tipoEvento" name="tipoEvento" value="torneo de ajedrez"> <!-- Opcion 4 -->
                            <label for="tipoEvento">Torneo De Ajedrez</label><br>
                            EOT;
                        }

                        if(strcmp($origen1, "externo") == 0){
                            echo <<< EOT
                            <input type="hidden" id="origen1" name="origen1" value="$origen1">
                            <input type="radio" id="tipoEvento" name="tipoEvento" value="conferencia"> <!-- Opcion 1 - E -->
                            <label for="tipoEvento">Conferencia</label><br>

                            <input type="radio" id="tipoEvento" name="tipoEvento" value="exposicion"> <!-- Opcion 2 - E -->
                            <label for="tipoEvento">Exposición</label><br>
                            EOT;
                        }
                        ?>
                    </td>
                    <td>
                        <br><br><br><br><br><br><br><br><input type = "submit" name = "siguiente" value = "SIGUIENTE">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>