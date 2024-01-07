<?php
$origen1_5 = $_POST["origen1_5"];
$tipoEvento5 = $_POST["tipoEvento5"];
$clasificacionEvento4 = $_POST["clasificacionEvento4"];

$tituloEvento3 = $_POST["tituloEvento3"];
$descripcionEvento3 = $_POST["descripcionEvento3"];
$cantidadPersonas3 = $_POST["cantidadPersonas3"];

$inicioEventoF2 = $_POST["inicioEventoF2"];
$inicioEventoT2 = $_POST["inicioEventoT2"];
$finalEventoF2 = $_POST["finalEventoF2"];
$finalEventoT2 = $_POST["finalEventoT2"];
$duracionEvento2 = $_POST["duracionEvento2"];

/* Material # 1*/
$m1 = "";
$numM1 = $_POST["numEstantes"];

/* Material # 2*/
$m2 = "";
$numM2 = $_POST["numGabinetes"];

/* Material # 3*/
$m3 = "";
$numM3 = $_POST["numMesas"];

/* Material # 4*/
$m4 = "";
$numM4 = $_POST["numMicrofonos"];

/* Material # 5*/
$m5 = "";
$tipM5 = $_POST["tipoProyector"];
$numM5 = $_POST["numProyectores"];

/* Material # 6*/
$m6 = "";
$numM6 = $_POST["numSillas"];

/* Material # 7*/
$m7 = "";
$tipM7 = $_POST["tipoAltavoces"];
$numM7 = $_POST["numAltavoces"];

/* Material # 8*/
$m8 = "";
$tipM8 = $_POST["tipoMaterialExtra"];
$numM8 = $_POST["numMaterialExtra"];

$verificacion = array("material1", "material2", "material3", "material4", "material5", "material6", "material7", "nombreMaterialExtra");
for($a = 0; $a<8; $a++){
    if(isset($_POST[$verificacion[$a]]) == true){
        if(strcmp($verificacion[$a],"material1") == 0){
            $m1 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material2") == 0){
            $m2 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material3") == 0){
            $m3 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material4") == 0){
            $m4 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material5") == 0){
            $m5 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material6") == 0){
            $m6 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"material7") == 0){
            $m7 = $_POST[$verificacion[$a]];
        }
        if(strcmp($verificacion[$a],"nombreMaterialExtra") == 0){
            $m8 = $_POST[$verificacion[$a]];
        }
    }
}
?>
<!DOCTYPE html> <!-- 8 -->
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
                <td id = "datosExpositor">
                    <h2><center>DATOS PERSONALES DEL EXPOSITOR</center></h2>
                </td>
            </tr>
        </table>
    </center>
    <p>Les agradecemos su interés en presentarse en nuestra Institución y nuestro Departamento de Vinculación y Extensión.
Por favor, responda cada campo cuidadosamente.</p>
    <form action = "verificarDatos.php" method = "POST">
        <?php
            echo <<< EOT
            <input type="hidden" id="origen1_6" name="origen1_6" value="$origen1_5">
            <input type="hidden" id="tipoEvento6" name="tipoEvento6" value="$tipoEvento5">
            <input type="hidden" id="clasificacionEvento5" name="clasificacionEvento5" value="$clasificacionEvento4">

            <input type="hidden" id="tituloEvento4" name="tituloEvento4" value="$tituloEvento3">
            <input type="hidden" id="descripcionEvento4" name="descripcionEvento4" value="$descripcionEvento3">
            <input type="hidden" id="cantidadPersonas4" name="cantidadPersonas4" value="$cantidadPersonas3">

            <input type="hidden" id="inicioEventoF3" name="inicioEventoF3" value="$inicioEventoF2">
            <input type="hidden" id="inicioEventoT3" name="inicioEventoT3" value="$inicioEventoT2">
            <input type="hidden" id="finalEventoF3" name="finalEventoF3" value="$finalEventoF2">
            <input type="hidden" id="finalEventoT3" name="finalEventoT3" value="$finalEventoT2">
            <input type="hidden" id="duracionEvento3" name="duracionEvento3" value="$duracionEvento2">

            <input type="hidden" id="m1_2" name="m1_2" value="$m1">
            <input type="hidden" id="numM1_2" name="numM1_2" value="$numM1">

            <input type="hidden" id="m2_2" name="m2_2" value="$m2">
            <input type="hidden" id="numM2_2" name="numM2_2" value="$numM2">

            <input type="hidden" id="m3_2" name="m3_2" value="$m3">
            <input type="hidden" id="numM3_2" name="numM3_2" value="$numM3">

            <input type="hidden" id="m4_2" name="m4_2" value="$m4">
            <input type="hidden" id="numM4_2" name="numM4_2" value="$numM4">

            <input type="hidden" id="m5_2" name="m5_2" value="$m5">
            <input type="hidden" id="tipM5_2" name="tipM5_2" value="$tipM5">
            <input type="hidden" id="numM5_2" name="numM5_2" value="$numM5">

            <input type="hidden" id="m6_2" name="m6_2" value="$m6">
            <input type="hidden" id="numM6_2" name="numM6_2" value="$numM6">

            <input type="hidden" id="m7_2" name="m7_2" value="$m7">
            <input type="hidden" id="tipM7_2" name="tipM7_2" value="$tipM7">
            <input type="hidden" id="numM7_2" name="numM7_2" value="$numM7">

            <input type="hidden" id="m8_2" name="m8_2" value="$m8">
            <input type="hidden" id="tipM8_2" name="tipM8_2" value="$tipM8">
            <input type="hidden" id="numM8_2" name="numM8_2" value="$numM8">
            EOT;
        ?>
        <fieldset>
            <legend><b>Datos personales</b></legend>
            <table>
                <tr>
                    <td>
                        <label for="nombres">Nombre(s): </label><br><br>
                    </td>
                    <td>
                        <input type="text" id="gen" name="nombres" value="" size = "60"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellidoP">Apellido Paterno: </label><br><br>
                    </td>
                    <td>
                        <input type="text" id="gen" name="apellidoP" value="" size = "60"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellidoM">Apellido Materno: </label><br><br>
                    </td>
                    <td>
                        <input type="text" id="gen" name="apellidoM" value="" size = "60"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="curp">CURP: </label>
                    </td>
                    <td>
                        <input type="text" id="gen" name="curp" value="" size = "60">
                    </td>
                </tr>
            </table>

        </fieldset>
        <fieldset>
            <legend><b>Medios de contacto</b></legend>
            <table>
                <tr>
                    <td><label for="correo1">Correo Electronico: </label><br><br></td>
                    <td><input type="email" id="gen" name="correo1" value="" size = "60"><br><br></td>
                </tr>
                <tr>
                    <td><label for="correo2">Correo Electronico Alterno: </label><br><br></td>
                    <td><input type="email" id="gen" name="correo2" value="" size = "60"><br><br></td>
                </tr>
                <tr>
                    <td><label for="telefono">Telefono: </label><br><br></td>
                    <td><input type="tel" id="gen" name="telefono" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value="" size = "60"><br><br></td>
                </tr>
                <tr>
                    <td><label for="celular">Celular: </label></td>
                    <td><input type="tel" id="gen" name="celular" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value="" size = "60"></td>
                </tr>
            </table>
            
        </fieldset>
        <?php
            if(strcmp($origen1_5, "interno") == 0){
                echo <<< EOT
                    <fieldset>
                        <legend><b>Datos De La Institución o Empresa</b></legend>
                        <!---->
                        <table>
                            <tr>
                                <td><label for="nombreInstitucion">Nombre De La Institución: </label></td>
                                <td><input type="text" id="gen" name="nombreInstitucion" value="Tecnológico Nacional de México" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="plantel">Plantel: </label></td>
                                <td><input type="text" id="gen" name="plantel" value="Tecnológico de Estudios Superiores de Ecatepec" size = "90" readonly><br><br></td>
                            </tr>
                        </table>
                        
                        <b>Dirección: </b><br><br>
                        <table>
                            <tr>
                                <td><label for="calle">Calle: </label><br><br></td>
                                <td><input type="text" id="gen" name="calle" value="Av. Tecnológico" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="numero">Numero: </label><br><br></td>
                                <td><input type="text" id="gen" name="numero" value="S/N" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="colonia">Colonia: </label><br><br></td>
                                <td><input type="text" id="gen" name="colonia" value="Valle de Anahuac" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="codigoPostal">Código Postal: </label><br><br></td>
                                <td><input type="text" id="gen" name="codigoPostal" value="55210" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="estadoCiudad">Estado / Ciudad: </label><br><br></td>
                                <td><input type="text" id="gen" name="estadoCiudad" value="Ecatepec de Morelos, Estado De Mexico" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="pais">Pais: </label></td>
                                <td><input type="text" id="gen" name="pais" value="México" size = "90" readonly></td>
                            </tr>
                        </table>
                        <b>Medios De Contacto:</b>
                        <table>
                            <tr>
                                <td><label for="telefonoOrigen">Telefono: </label><br><br></td>
                                <td><input type="tel" id="gen" name="telefonoOrigen" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value="55 5000 2300" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="telefonoExtension">Extensión: </label><br><br></td>
                                <td><input type="tel" id="gen" name="telefonoExtension" value="2303" pattern="[0-9]{4}" size = "90" readonly><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="correoOrigen">Correo Electronico: </label><br><br></td>
                                <td><input type="email" id="gen" name="correoOrigen" value="soportecorreo@tese.edu.mx" size = "90" readonly><br><br></td>
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
                        <!---->
                    </fieldset>
                EOT;    
            }
            else{
                echo <<< EOT
                <fieldset>
                        <legend><b>Datos De La Institución o Empresa</b></legend>
                        <!---->
                        <table>
                            <tr>
                                <td><label for="nombreInstitucion">Nombre De La Institución: </label></td>
                                <td><input type="text" id="gen" name="nombreInstitucion" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="plantel">Plantel: </label></td>
                                <td><input type="text" id="gen" name="plantel" value="" size = "90"><br><br></td>
                            </tr>
                        </table>
                        
                        <b>Dirección: </b><br><br>
                        <table>
                            <tr>
                                <td><label for="calle">Calle: </label><br><br></td>
                                <td><input type="text" id="gen" name="calle" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="numero">Numero: </label><br><br></td>
                                <td><input type="text" id="gen" name="numero" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="colonia">Colonia: </label><br><br></td>
                                <td><input type="text" id="gen" name="colonia" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="codigoPostal">Código Postal: </label><br><br></td>
                                <td><input type="text" id="gen" name="codigoPostal" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="estadoCiudad">Estado / Ciudad: </label><br><br></td>
                                <td><input type="text" id="gen" name="estadoCiudad" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="pais">Pais: </label></td>
                                <td><input type="text" id="gen" name="pais" value="" size = "90"></td>
                            </tr>
                        </table>
                        <b>Medios De Contacto:</b>
                        <table>
                            <tr>
                                <td><label for="telefonoOrigen">Telefono: </label><br><br></td>
                                <td><input type="tel" id="gen" name="telefonoOrigen" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value="" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="telefonoExtension">Extensión: </label><br><br></td>
                                <td><input type="tel" id="gen" name="telefonoExtension" value="" pattern="[0-9]{4}" size = "90"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="correoOrigen">Correo Electronico: </label><br><br></td>
                                <td><input type="email" id="gen" name="correoOrigen" value="" size = "90"><br><br></td>
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
                        <!---->
                    </fieldset>
                EOT;
            }
        ?>
    </form>
</body>
</html>