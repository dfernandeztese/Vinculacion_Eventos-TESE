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

/*echo $origen1_5."<br>";
echo $tipoEvento5."<br>";
echo $clasificacionEvento4."<br>";
echo $tituloEvento3."<br>";
echo $descripcionEvento3."<br>";
echo $cantidadPersonas3."<br>";
echo $inicioEventoF2."<br>";
echo $inicioEventoT2."<br>";
echo $finalEventoF2."<br>";
echo $finalEventoT2."<br>";
echo $duracionEvento2."<br>";

echo "M1: ".$m1."<br>";
echo $numM1."<br>";
echo "M2: ".$m2."<br>";
echo $numM2."<br>";
echo "M3: ".$m3."<br>";
echo $numM3."<br>";
echo "M4: ".$m4."<br>";
echo $numM4."<br>";
echo "M5: ".$m5."<br>";
echo $tipM5."<br>";
echo $numM5."<br>";
echo "M6: ".$m6."<br>";
echo $numM6."<br>";
echo "M7: ".$m7."<br>";
echo $tipM7."<br>";
echo $numM7."<br>";
echo "M8: ".$m8."<br>";
echo $tipM8."<br>";
echo $numM8."<br>";*/
?>
<!DOCTYPE html> <!-- 8 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body>
    <h4><center>DATOS DEL EXPOSITOR</center></h4>
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
            <legend><b>Datos Personales</b></legend>
            <label for="nombres">Nombre(s): </label>
            <input type="text" id="nombres" name="nombres" value=""><br><br>

            <label for="apellidoP">Apellido Paterno: </label>
            <input type="text" id="apellidoP" name="apellidoP" value=""><br><br>

            <label for="apellidoM">Apellido Materno: </label>
            <input type="text" id="apellidoM" name="apellidoM" value=""><br><br>

            <label for="curp">CURP: </label>
            <input type="text" id="curp" name="curp" value="">
        </fieldset>
        <fieldset>
            <legend><b>Medios De Contacto</b></legend>
            <label for="correo1">Correo Electronico: </label>
            <input type="email" id="correo1" name="correo1" value=""><br><br>

            <label for="correo2">Correo Electronico Alterno: </label>
            <input type="email" id="correo2" name="correo2" value=""><br><br>

            <label for="telefono">Telefono: </label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value=""><br><br>

            <label for="celular">Celular: </label>
            <input type="tel" id="celular" name="celular" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value=""><br><br>
        </fieldset>
        <?php
            if(strcmp($origen1_5, "interno") == 0){
                echo <<< EOT
                    <fieldset>
                        <legend><b>Datos De La Institución o Empresa</b></legend>
                        <!---->
                        <label for="nombreInstitucion">Nombre De La Institución: </label>
                        <input type="text" id="nombreInstitucion" name="nombreInstitucion" value="Tecnológico Nacional de México" readonly><br><br>

                        <label for="plantel">Plantel: </label>
                        <input type="text" id="plantel" name="plantel" value="Tecnológico de Estudios Superiores de Ecatepec" readonly><br><br>

                        <b>Dirección: </b><br><br>
                        <label for="calle">Calle: </label>
                        <input type="text" id="calle" name="calle" value="Av. Tecnológico" readonly><br><br>

                        <label for="numero">Numero: </label>
                        <input type="text" id="numero" name="numero" value="S/N" readonly><br><br>

                        <label for="colonia">Colonia: </label>
                        <input type="text" id="colonia" name="colonia" value="Valle de Anahuac" readonly><br><br>

                        <label for="codigoPostal">Código Postal: </label>
                        <input type="text" id="codigoPostal" name="codigoPostal" value="55210" readonly><br><br>

                        <label for="estadoCiudad">Estado / Ciudad: </label>
                        <input type="text" id="estadoCiudad" name="estadoCiudad" value="Ecatepec de Morelos, Estado De Mexico" readonly><br><br>

                        <label for="pais">Pais: </label>
                        <input type="text" id="pais" name="pais" value="México" readonly><br><br>

                        <b>Medios De Contacto: </b><br><br>
                        <label for="telefonoOrigen">Telefono: </label>
                        <input type="tel" id="telefonoOrigen" name="telefonoOrigen" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value="55 5000 2300" readonly><br><br>

                        <label for="telefonoExtension">Extensión: </label>
                        <input type="tel" id="telefonoExtension" name="telefonoExtension" value="2303" pattern="[0-9]{4}" readonly><br><br>

                        <label for="correoOrigen">Correo Electronico: </label>
                        <input type="email" id="correoOrigen" name="correoOrigen" value="soportecorreo@tese.edu.mx" readonly><br><br>

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
                        <!---->
                    </fieldset>
                EOT;    
            }
            else{
                echo <<< EOT
                <fieldset>
                    <legend><b>Datos De La Institución o Empresa</b></legend>
                    <!---->
                    <label for="nombreInstitucion">Nombre De La Institución: </label>
                    <input type="text" id="nombreInstitucion" name="nombreInstitucion" value=""><br><br>
        
                    <label for="plantel">Plantel: </label>
                    <input type="text" id="plantel" name="plantel" value=""><br><br>
        
                    <b>Dirección: </b><br><br>
                    <label for="calle">Calle: </label>
                    <input type="text" id="calle" name="calle" value=""><br><br>
        
                    <label for="numero">Numero: </label>
                    <input type="text" id="numero" name="numero" value=""><br><br>
        
                    <label for="colonia">Colonia: </label>
                    <input type="text" id="colonia" name="colonia" value=""><br><br>
        
                    <label for="codigoPostal">Código Postal: </label>
                    <input type="text" id="codigoPostal" name="codigoPostal" value=""><br><br>
        
                    <label for="estadoCiudad">Estado / Ciudad: </label>
                    <input type="text" id="estadoCiudad" name="estadoCiudad" value=""><br><br>
        
                    <label for="pais">Pais: </label>
                    <input type="text" id="pais" name="pais" value=""><br><br>
        
                    <b>Medios De Contacto: </b><br><br>
                    <label for="telefonoOrigen">Telefono: </label>
                    <input type="tel" id="telefonoOrigen" name="telefonoOrigen" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" value=""><br><br>
        
                    <label for="telefonoExtension">Extensión: </label>
                    <input type="tel" id="telefonoExtension" name="telefonoExtension" value="" pattern="[0-9]{4}"><br><br>
        
                    <label for="correoOrigen">Correo Electronico: </label>
                    <input type="email" id="correoOrigen" name="correoOrigen" value=""><br><br>
        
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
                    <!---->
                </fieldset>
                EOT;
            }
        ?>
    </form>
</body>
</html>