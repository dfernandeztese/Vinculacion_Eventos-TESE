<?php
$origen1 = $_POST["origen"];
?>
<!DOCTYPE html> <!-- 3 -->
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
                <td id = "clasificacion">
                    <h2><center>CLASIFICACIÓN DEL EVENTO</center></h2>
                </td>
            </tr>
        </table>
    </center>
    <form action = "clasificacionEvento.php" method = "POST">
        <fieldset>
            <legend><b>¿A que clasificación pertenece el evento que realizará?</b></legend>
            <table> <!-- Definir Tabla-->
                <tr> <!-- Definir Fila -->
                    <td> <!-- Definir Columna-->
                        <label for="tipoEventoG"><b>Clasificación: </b></label> <!--Titulo Tipo De Evento -->
                        <br><br><br><br><br><br><br><br>
                        <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton"><span>REGRESAR</span></button>
                    </td>
                    <td>
                        <?php
                        if(strcmp($origen1, "interno") == 0){
                            echo <<< EOT
                            <input type="hidden" id="origen1" name="origen1" value="$origen1">
                            <input type="radio" id="tipoEventoID" name="tipoEvento" value="artistico" checked> <!-- Opcion 1 -->
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
                            <input type="radio" id="tipoEvento" name="tipoEvento" value="conferencia" checked> <!-- Opcion 1 - E -->
                            <label for="tipoEvento">Conferencia</label><br>

                            <input type="radio" id="tipoEvento" name="tipoEvento" value="exposicion"> <!-- Opcion 2 - E -->
                            <label for="tipoEvento">Exposición</label><br>
                            EOT;
                        }
                        ?>
                    </td>
                    <td>
                        <br><br><br><br><br><br><br><br>
                        <button type = "submit" id = "boton"><span>SIGUIENTE</span></button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>