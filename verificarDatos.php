<?php
/* Datos del evento */
$origen1_6 = $_POST["origen1_6"];
$tipoEvento6 = $_POST["tipoEvento6"];
$clasificacionEvento5 = $_POST["clasificacionEvento5"];

$tituloEvento4 = $_POST["tituloEvento4"];
$descripcionEvento4 = $_POST["descripcionEvento4"];
$cantidadPersonas4 = $_POST["cantidadPersonas4"];

$inicioEventoF3 = $_POST["inicioEventoF3"];
$inicioEventoT3 = $_POST["inicioEventoT3"];
$finalEventoF3 = $_POST["finalEventoF3"];
$finalEventoT3 = $_POST["finalEventoT3"];
$duracionEvento3 = $_POST["duracionEvento3"];

/* Listado del evento */
// Material # 1
$m1_2 = $_POST["m1_2"];
$numM1_2 = $_POST["numM1_2"];

// Material # 2
$m2_2 = $_POST["m2_2"];
$numM2_2 = $_POST["numM2_2"];

// Material # 3
$m3_2 = $_POST["m3_2"];
$numM3_2 = $_POST["numM3_2"];

// Material # 4
$m4_2 = $_POST["m4_2"];
$numM4_2 = $_POST["numM4_2"];

// Material # 5
$m5_2 = $_POST["m5_2"];
$tipM5_2 = $_POST["tipM5_2"];
$numM5_2 = $_POST["numM5_2"];

// Material # 6
$m6_2 = $_POST["m6_2"];
$numM6_2 = $_POST["numM6_2"];

// Material # 7
$m7_2 = $_POST["m7_2"];
$tipM7_2 = $_POST["tipM7_2"];
$numM7_2 = $_POST["numM7_2"];

// Material # 8
$m8_2 = $_POST["m8_2"];
$tipM8_2 = $_POST["tipM8_2"];
$numM8_2 = $_POST["numM8_2"];

/* Datos del expositor */ 
$nombres = $_POST["nombres"];
$apellidoP = $_POST["apellidoP"];
$apellidoM = $_POST["apellidoM"];
$curp = $_POST["curp"];

$correo1 = $_POST["correo1"];
$correo2 = $_POST["correo2"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];

/* Datos de la institucion o empresa */
$nombreInstitucion = $_POST["nombreInstitucion"];
$plantel = $_POST["plantel"];
$calle = $_POST["calle"];
$numero = $_POST["numero"];
$colonia = $_POST["colonia"];
$codigoPostal = $_POST["codigoPostal"];
$estadoCiudad = $_POST["estadoCiudad"];
$pais = $_POST["pais"];

$telefonoOrigen = $_POST["telefonoOrigen"];
$telefonoExtension = $_POST["telefonoExtension"];
$correoOrigen = $_POST["correoOrigen"];
?>
<!DOCTYPE html> <!-- 9 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
    <h4><center>INFORMACIÓN CAPTURADA</center></h4>
    <form action = "confirmarSolicitud.php" method = "POST">
        <?php
            echo <<< EOT
            <!-- Datos del evento: 11 -->
            <input type="hidden" id="origen1_7" name="origen1_7" value="$origen1_6">
            <input type="hidden" id="tipoEvento7" name="tipoEvento7" value="$tipoEvento6">
            <input type="hidden" id="clasificacionEvento6" name="clasificacionEvento6" value="$clasificacionEvento5">
            <input type="hidden" id="tituloEvento5" name="tituloEvento5" value="$tituloEvento4">
            <input type="hidden" id="descripcionEvento5" name="descripcionEvento5" value="$descripcionEvento4">
            <input type="hidden" id="cantidadPersonas5" name="cantidadPersonas5" value="$cantidadPersonas4">
            <input type="hidden" id="inicioEventoF4" name="inicioEventoF4" value="$inicioEventoF3">
            <input type="hidden" id="inicioEventoT4" name="inicioEventoT4" value="$inicioEventoT3">
            <input type="hidden" id="finalEventoF4" name="finalEventoF4" value="$finalEventoF3">
            <input type="hidden" id="finalEventoT4" name="finalEventoT4" value="$finalEventoT3">
            <input type="hidden" id="duracionEvento4" name="duracionEvento4" value="$duracionEvento3">
            <!-- Listado del evento: 19 -->
            <input type="hidden" id="m1_3" name="m1_3" value="$m1_2">
            <input type="hidden" id="numM1_3" name="numM1_3" value="$numM1_2">
            <input type="hidden" id="m2_3" name="m2_3" value="$m2_2">
            <input type="hidden" id="numM2_3" name="numM2_3" value="$numM2_2">
            <input type="hidden" id="m3_3" name="m3_3" value="$m3_2">
            <input type="hidden" id="numM3_3" name="numM3_3" value="$numM3_2">
            <input type="hidden" id="m4_3" name="m4_3" value="$m4_2">
            <input type="hidden" id="numM4_3" name="numM4_3" value="$numM4_2">
            <input type="hidden" id="m5_3" name="m5_3" value="$m5_2">
            <input type="hidden" id="tipM5_3" name="tipM5_3" value="$tipM5_2">
            <input type="hidden" id="numM5_3" name="numM5_3" value="$numM5_2">
            <input type="hidden" id="m6_3" name="m6_3" value="$m6_2">
            <input type="hidden" id="numM6_3" name="numM6_3" value="$numM6_2">
            <input type="hidden" id="m7_3" name="m7_3" value="$m7_2">
            <input type="hidden" id="tipM7_3" name="tipM7_3" value="$tipM7_2">
            <input type="hidden" id="numM7_3" name="numM7_3" value="$numM7_2">
            <input type="hidden" id="m8_3" name="m8_3" value="$m8_2">
            <input type="hidden" id="tipM8_3" name="tipM8_3" value="$tipM8_2">
            <input type="hidden" id="numM8_3" name="numM8_3" value="$numM8_2">
            <!-- Datos del expositor: 8 -->
            <input type="hidden" id="nombres2" name="nombres2" value="$nombres">
            <input type="hidden" id="apellidoP2" name="apellidoP2" value="$apellidoP">
            <input type="hidden" id="apellidoM2" name="apellidoM2" value="$apellidoM">
            <input type="hidden" id="curp2" name="curp2" value="$curp">
            <input type="hidden" id="correo1_2" name="correo1_2" value="$correo1">
            <input type="hidden" id="correo2_2" name="correo2_2" value="$correo2">
            <input type="hidden" id="telefono2" name="telefono2" value="$telefono">
            <input type="hidden" id="celular2" name="celular2" value="$celular">
            <!-- Datos de la institucion o empresa: 11 -->
            <input type="hidden" id="nombreInstitucion2" name="nombreInstitucion2" value="$nombreInstitucion">
            <input type="hidden" id="plantel2" name="plantel2" value="$plantel">
            <input type="hidden" id="calle2" name="calle2" value="$calle">
            <input type="hidden" id="numero2" name="numero2" value="$numero">
            <input type="hidden" id="colonia2" name="colonia2" value="$colonia">
            <input type="hidden" id="codigoPostal2" name="codigoPostal2" value="$codigoPostal">
            <input type="hidden" id="estadoCiudad2" name="estadoCiudad2" value="$estadoCiudad">
            <input type="hidden" id="pais2" name="pais2" value="$pais">
            <input type="hidden" id="telefonoOrigen2" name="telefonoOrigen2" value="$telefonoOrigen">
            <input type="hidden" id="telefonoExtension2" name="telefonoExtension2" value="$telefonoExtension">
            <input type="hidden" id="correoOrigen2" name="correoOrigen2" value="$correoOrigen">
            EOT;
        ?>
        <fieldset>
            <legend><b>Datos del evento</b></legend>
            <?php
            echo <<< EOT
            <table border="1" style = "border-collapse: 1px solid black">
                <tr>
                    <td>Origen del evento</td>
                    <td>$origen1_6</td>
                </tr>
                <tr>
                    <td>Tipo de evento</td>
                    <td>$tipoEvento6</td>
                </tr>
                <tr>
                    <td>Clasificacion del evento</td>
                    <td>$clasificacionEvento5</td>
                </tr>
                <tr>
                    <td>Titulo del evento</td>
                    <td>$tituloEvento4</td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td>$descripcionEvento4</td>
                </tr>
                <tr>
                    <td>Capacidad maxima de personas</td>
                    <td>$cantidadPersonas4</td>
                </tr>
                <tr>
                    <td>Fecha de inicio</td>
                    <td>$inicioEventoF3</td>
                </tr>
                <tr>
                    <td>Hora exacta de inicio</td>
                    <td>$inicioEventoT3</td>
                </tr>
                <tr>
                    <td>Fecha de finalización</td>
                    <td>$finalEventoF3</td>
                </tr>
                <tr>
                    <td>Hora exacta de finalización</td>
                    <td>$finalEventoT3</td>
                </tr>
                <tr>
                    <td>Tipo de duracion</td>
                    <td>$duracionEvento3</td>
                </tr>
            </table>
            EOT;
            ?>
        </fieldset>
        <fieldset>
            <legend><b>Listado de equipo solicitado</b></legend>
                <?php
                /* Material # 1*/
                if(strlen($m1_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m1_2</td>
                            <td>N° pza: $numM1_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 2*/
                if(strlen($m2_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m2_2</td>
                            <td>N° pza: $numM2_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 3*/
                if(strlen($m3_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m3_2</td>
                            <td>N° pza: $numM3_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 4*/
                if(strlen($m4_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m4_2</td>
                            <td>N° pza: $numM4_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 5*/
                if(strlen($m5_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m5_2</td>
                            <td>Tipo: $tipM5_2</td>
                            <td>N° pza: $numM5_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 6*/
                if(strlen($m6_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m6_2</td>
                            <td>N° pza: $numM6_2</td>
                        </tr>
                    </table>
                    EOT; 
                }

                /* Material # 7*/
                if(strlen($m7_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m7_2</td>
                            <td>Tipo: $tipM7_2</td>
                            <td>N° pza: $numM7_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                /* Material # 8*/
                if(strlen($m8_2) > 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>$m8_2</td>
                            <td>Tipo: $tipM8_2</td>
                            <td>N° pza: $numM8_2</td>
                        </tr>
                    </table>
                    EOT;
                }

                if(strlen($m1_2) == 0 && strlen($m2_2) == 0 && strlen($m3_2) == 0 && strlen($m4_2) == 0 && strlen($m5_2) == 0 && strlen($m6_2) == 0 && strlen($m7_2) == 0 && strlen($m8_2) == 0){
                    echo <<< EOT
                    <table border="1" style = "border-collapse: 1px solid black">
                        <tr>
                            <td>No se seleccionó ningun equipo y/o material</td>
                        </tr>
                    </table>
                    EOT;
                }
                ?>
        </fieldset>
        <fieldset>
            <legend><b>Datos del expositor</b></legend>
            <table border="1" style = "border-collapse: 1px solid black">
                <?php
                echo <<< EOT
                    <tr>
                        <td>Nombre(s)</td>
                        <td>$nombres</td>
                    </tr>
                    <tr>
                        <td>Apellido paterno</td>
                        <td>$apellidoP</td>
                    </tr>
                    <tr>
                        <td>Apellido materno</td>
                        <td>$apellidoM</td>
                    </tr>
                    <tr>
                        <td>CURP</td>
                        <td>$curp</td>
                    </tr>
                    <tr>
                        <td>Correo electronico</td>
                        <td>$correo1</td>
                    </tr>
                    <tr>
                        <td>Correo electronico alterno</td>
                        <td>$correo2</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>$telefono</td>
                    </tr>
                    <tr>
                        <td>Celular</td>
                        <td>$celular</td>
                    </tr>
                EOT;                
                ?>
            </table>
        </fieldset>
        <fieldset>
            <legend><b>Datos de la institucion o Empresa</b></legend>
            <table border="1" style = "border-collapse: 1px solid black">
                <?php
                echo <<< EOT
                    <tr>
                        <td>Nombre institucion</td>
                        <td>$nombreInstitucion</td>
                    </tr>
                    <tr>
                        <td>Plantel</td>
                        <td>$plantel</td>
                    </tr>
                    <tr>
                        <td>Calle</td>
                        <td>$calle</td>
                    </tr>
                    <tr>
                        <td>Numero</td>
                        <td>$numero</td>
                    </tr>
                    <tr>
                        <td>Colonia</td>
                        <td>$colonia</td>
                    </tr>
                    <tr>
                        <td>Código postal</td>
                        <td>$codigoPostal</td>
                    </tr>
                    <tr>
                        <td>Estado / Ciudad</td>
                        <td>$estadoCiudad</td>
                    </tr>
                    <tr>
                        <td>Pais</td>
                        <td>$pais</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>$telefonoOrigen</td>
                    </tr>
                    <tr>
                        <td>Extension</td>
                        <td>$telefonoExtension</td>
                    </tr>
                    <tr>
                        <td>Correo electronico</td>
                        <td>$correoOrigen</td>
                    </tr>
                EOT;                
                ?>
            </table>
        </fieldset>
        <p><b>*Nota: Si la informacion es correcta, seleccione el botón "REGISTRAR SOLICITUD". De lo contrario, seleccioné el botón "REGRESAR" para retroceder y corregir el error.</b></p>
        <table>
            <tr>
                <td>
                    <input type = "submit" formaction ="javascript: history.go(-1)" name = "regresar" value = "REGRESAR">
                </td>
                <td>
                    <input type = "submit" name = "registrar" value = "REGISTRAR SOLICITUD">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>