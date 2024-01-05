<?php
 CODIGO SUSPENDIDO POR EL MOMENTO
$nombreHost = 'localhost';
$nombreUsuario = 'root';
$pwd = '';
$nombreBD = 'VinculacionProyecto';

$conexionBD = mysqli_connect($nombreHost, $nombreUsuario, $pwd, $nombreBD) or die("ERROR!!!! No Se Pudo Conectar Al Servidor :(");
$guardarOrigen = "INSERT INTO origen (nombreInstitucion, direccion) VALUES ('".$_POST["nombreOrigen"]."','".$_POST["direccionOrigen"]."')";
$tmp1 = mysqli_query($conexionBD, $guardarOrigen) or die ("ERROR !!! No Se Pudo Tener Conexion Con La BD :( [1]");

$guardarContacto = "INSERT INTO Contacto (correoPersonal, correoTrabajo, correoAlternativo, telefonoPersonal, telefonoCasa, telfonoTrabajo, telfonoAlternativo) VALUES ('".$_POST["correoElectronicoPersonal"]."','".$_POST["correoElectronicoTrabajo"]."','".$_POST["correoElectronicoAlternativo"]."','".$_POST["telefonoPersonal"]."','".$_POST["telefonoCasa"]."','".$_POST["telefonoTrabajo"]."','".$_POST["telefonoAlternativo"]."')";
$tmp2 = mysqli_query($conexionBD, $guardarContacto) or die ("ERROR !!! No Se Pudo Tener Conexion Con La BD :( [2]");

$guardarExpositor = "INSERT INTO Expositor (nombre, apellidoPat, apellidoMat) VALUES ('".$_POST["nombre"]."','".$_POST["apellidoPaterno"]."','".$_POST["apellidoMaterno"]."')";
$tmp3 = mysqli_query($conexionBD, $guardarExpositor) or die ("ERROR !!! No Se Pudo Tener Conexion Con La BD :( [3]");

$folioAsig = "SELECT idExpositor FROM expositor WHERE nombre= '".$_POST["nombre"]."' AND apellidoPat= '".$_POST["apellidoPaterno"]."' AND apellidoMat= '".$_POST["apellidoMaterno"]."'";

if ($stmt = $conexionBD->prepare($folioAsig)) {
    $stmt->execute();
    $stmt->bind_result($folioAsig2);
    while ($stmt->fetch()) {}
    $stmt->close();
}

$actualizarInfo1 = "UPDATE Expositor SET idContacto1 = '".$folioAsig2."' WHERE idExpositor = '".$folioAsig2."'";
$conexionBD->query($actualizarInfo1);

$actualizarInfo2 = "UPDATE Expositor SET idOrigen1 = '".$folioAsig2."' WHERE idExpositor = '".$folioAsig2."'";
$conexionBD->query($actualizarInfo2);
// XAMPP: Modificar (php.ini) ;extension=gd por extension=gd
mysqli_close($conexionBD);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTOS VINCULACIÓN</title>
</head>
<body background = "while">
<table>
        <tr>
            <th><img src = "Images/Logo_TESE.png" width="230px"></th>
            <th><h1>TECNOLÓGICO DE ESTUDIOS SUPERIORES DE ECATEPEC</h1></th>
        </tr>
    </table>
    <h2><center>CLASIFICACIÓN Y TIPO DE EVENTO</center></h2>
    <form action = "paso2.php" method = "POST">
        <table>
            <tr>
                <td><label for = "tipoEvento"><b>EXPOSITOR</b></label></td>
            </tr>
            <tr>
                <td><input type = "radio" id = "tipoEvento" name = "tipoExpositor" value = "EXTERNO">EXTERNO</td>
                <td></td>
                <td>
                    <select name = "tipoExpositor" >
                        <option value = "6">Conferencia</option>
                        <option value = "7">Exposición</option>
                    </select>
                </td>
            </tr>
        </table>
        <br><br>
        <table>
            <tr>
                <td><input type = "radio" id = "tipoEvento" name = "tipoExpositor" value = "INTERNO">INTERNO</td>
                <td></td>
                <td>
                    <select name = "tipoExpositor" >
                        <option value = "1">Teatro</option>
                        <option value = "2">Ajedrez</option>
                        <option value = "3">Danza</option>
                        <option value = "4">Conferencia</option>
                        <option value = "5">Exposición</option>
                    </select>
                </td>
            </tr>
        </table>
        <br><br>
        <table>
            <tr>
                <td><label for = "datosEvento"><b>DATOS DEL EVENTO</b></label></td></td>
            </tr>
            <tr>
                <td><label for = "datosEvento"><b>Nombre/Titulo: (*)</b></label></td>
                <td><input type = "text" id = "datosEvento" name = "nombreTitulo" value = "" style = "WIDTH:400px" placeholder = "Escribe Aquí El Nombre Del Evento"></td>
            </tr>
            <tr>
                <td><label for = "datosEvento"><b>Descripción: (*)</b></label></td>
                <td><input type = "text" id = "datosEvento" name = "descripcion" value = "" style = "WIDTH:400px" placeholder = "Escribe Aquí Una Descripción Del Evento"></td>
            </tr>
            <tr>
                <td><label for = "datosEvento"><b>Equipo Requerido:</b></label></td>
                <td>
                <input type = "radio" id = "datosEvento" name = "equipo" value = "Si">Sillas<br>
                <input type = "radio" id = "datosEvento" name = "equipo" value = "Si">Sonido<br>
                <input type = "radio" id = "datosEvento" name = "equipo" value = "Si">Mesas<br>
                <input type = "radio" id = "datosEvento" name = "equipo" value = "Si">Gabinete<br>
                </td>
                <td><input type = "number" id = "datosEvento" name = "cantidad" value = "0" style = "WIDTH:40px"></td>
            </tr>
        </table>
        <br><br>
        <center><input type = "submit" name = "siguiente2" value = "SIGUIENTE"></center>
    </form>
</body>
</html>
