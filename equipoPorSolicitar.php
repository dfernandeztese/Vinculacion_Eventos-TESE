<?php
$origen1_4 = $_POST["origen1_4"];
$tipoEvento4 = $_POST["tipoEvento4"];
$clasificacionEvento3 = $_POST["clasificacionEvento3"];

$tituloEvento2 = $_POST["tituloEvento2"];
$descripcionEvento2 = $_POST["descripcionEvento2"];
$cantidadPersonas2 = $_POST["cantidadPersonas2"];

$inicioEventoF = $_POST["inicioEventoF"];
$inicioEventoT = $_POST["inicioEventoT"];
$finalEventoF = $_POST["finalEventoF"];
$finalEventoT = $_POST["finalEventoT"];
$duracionEvento = $_POST["duracionEvento"];
?>
<!DOCTYPE html> <!-- 7 -->
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
                <td id = "equipo">
                    <h2><center>EQUIPO Y/O MATERIAL</center></h2>
                </td>
            </tr>
        </table>
    </center>

    <form action = "datosExpositor.php" method = "POST">
        <?php
            echo <<< EOT
                <input type="hidden" id="origen1_5" name="origen1_5" value="$origen1_4">
                <input type="hidden" id="tipoEvento5" name="tipoEvento5" value="$tipoEvento4">
                <input type="hidden" id="clasificacionEvento4" name="clasificacionEvento4" value="$clasificacionEvento3">
                <input type="hidden" id="tituloEvento3" name="tituloEvento3" value="$tituloEvento2">
                <input type="hidden" id="descripcionEvento3" name="descripcionEvento3" value="$descripcionEvento2">
                <input type="hidden" id="cantidadPersonas3" name="cantidadPersonas3" value="$cantidadPersonas2">
                <input type="hidden" id="inicioEventoF2" name="inicioEventoF2" value="$inicioEventoF">
                <input type="hidden" id="inicioEventoT2" name="inicioEventoT2" value="$inicioEventoT">
                <input type="hidden" id="finalEventoF2" name="finalEventoF2" value="$finalEventoF">
                <input type="hidden" id="finalEventoT2" name="finalEventoT2" value="$finalEventoT">
                <input type="hidden" id="duracionEvento2" name="duracionEvento2" value="$duracionEvento">
            EOT;
        ?>
        <fieldset>
            <legend><b>Materiales Disponibles</b></legend>
            <p>Seleccione todo el equipo y/o materiales que necesite utilizar para el evento</p>
            <p><b>Equipo disponible:</b></p>
            <table> <!-- Tabla: Estantes, Gabinete, Mesas, Microfonos--> 
                <tr>
                    <td>
                        <input type="checkbox" id="material1" name="material1" value="estantes">
                        <label for="material1">Estantes</label><br><br>
                    </td>
                    <td>
                        <label for="numEstantes">N° Estantes: </label>
                        <input type="number" id="numEstantes" name="numEstantes" min="1" max="40"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="material2" name="material2" value="gabinete">
                        <label for="material2">Gabinete</label><br><br>
                    </td>
                    <td>
                        <label for="numGabinetes">N° Gabinetes: </label>
                        <input type="number" id="numGabinetes" name="numGabinetes" min="1" max="40"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="material3" name="material3" value="mesas">
                        <label for="material3">Mesas</label><br><br>
                    </td>
                    <td>
                        <label for="numMesas">N° Mesas: </label>
                        <input type="number" id="numMesas" name="numMesas" min="1" max="150"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="material4" name="material4" value="microfonos">
                        <label for="material4">Microfonos</label><br><br>
                    </td>
                    <td>
                        <label for="numMicrofonos">N° Microfonos: </label>
                        <input type="number" id="numMicrofonos" name="numMicrofonos" min="1" max="15"><br><br>
                    </td>
                </tr>
            </table>
            <table> <!-- Tabla: Proyector-->
                <tr>
                    <td>
                        <input type="checkbox" id="material5" name="material5" value="proyector">
                        <label for="material5">Proyector</label><br><br>
                    </td>
                    <td>
                        <label for="tipoProyector">Tipo De Proyector: </label>
                        <select name = "tipoProyector" id = "gen">
                            <option value = ""></option>
                            <option value = "dlp">DLP</option>
                            <option value = "lcv">LCV</option>
                            <option value = "led">LED</option>
                        </select><br><br>
                    </td>
                    <td>
                        <label for="numProyectores">N° Proyectores: </label>
                        <input type="number" id="numProyectores" name="numProyectores" min="1" max="5"><br><br>
                    </td>
                </tr>
            </table>
            <table> <!-- Tabla: Sillas-->
                <tr>
                    <td>
                        <input type="checkbox" id="material6" name="material6" value="sillas">
                        <label for="material6">Sillas</label><br><br>
                    </td>
                    <td>
                        <label for="numSillas">N° Sillas: </label>
                        <input type="number" id="numSillas" name="numSillas" min="1" max="150"><br><br>
                    </td>
                </tr>
            </table>
            <table> <!-- Tabla: Sonido-->
                <tr>
                    <td>
                        <input type="checkbox" id="material7" name="material7" value="sonido">
                        <label for="material7">Sonido</label><br><br>
                    </td>
                    <td>
                        <select name = "tipoAltavoces" id = "gen">
                            <option value = ""></option>
                            <option value = "altavoces activos">Altavoces Activos</option>
                            <option value = "altavoces bluetooth">Altavoces Bluetooth</option>
                        </select><br><br>
                    </td>
                    <td>
                        <label for="numAltavoces">N° Altavoces: </label>
                        <input type="number" id="numAltavoces" name="numAltavoces" min="1" max="9"><br><br>
                    </td>
                </tr>
            </table>
            <table> <!-- Tabla: Otro-->
                <tr>
                    <td>
                        <input type="checkbox" id="material8" name="material8" value="Otro">
                        <label for="material8">Otro</label>
                    </td>
                    <!--<td>
                        <label for="nombreMaterialExtra">Introduzca El Nombre Del Material: </label>
                    </td>-->
                    <td>
                        <input type="text" id="gen" name="nombreMaterialExtra" value="" size = "90" placeholder = "Introduzca aquí el nombre del equipo / material">
                        <br><br>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <!--<td>
                        <label for="tipoMaterialExtra">Introduzca El Tipo De Material: </label>
                    </td>-->
                    <td>
                        <input type="text" id="gen" name="tipoMaterialExtra" value="" size = "90" placeholder = "Introduzca aquí el tipo del equipo / material, de lo contrario, introduzca la palabra 'normal'">
                        <br><br>
                    </td>
                    <td>
                        <label for="numMaterialExtra">N° Material Extra: </label>
                        <input type="number" id="gen" name="numMaterialExtra" min="1" max="150"><br><br>
                    </td>
                </tr>
            </table>
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