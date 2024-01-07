<?php /* 10 */
/* Credenciales */
$nombreHost = 'localhost';
$nombreUsuario = 'root';
$pwd = '';
$nombreBD = 'VinculacionProyecto';

/* Datos del evento */
$origen = $_POST["origen1_7"];
$tipoEvento = $_POST["tipoEvento7"];
$clasificacionEvento = $_POST["clasificacionEvento6"];
$tituloEvento = $_POST["tituloEvento5"];
$descripcionEvento = $_POST["descripcionEvento5"];
$cantidadPersonas = $_POST["cantidadPersonas5"];
$inicioEventoF = $_POST["inicioEventoF4"];
$inicioEventoT = $_POST["inicioEventoT4"];
$finalEventoF = $_POST["finalEventoF4"];
$finalEventoT = $_POST["finalEventoT4"];
$duracionEvento = $_POST["duracionEvento4"];

/* Listado del evento */
// Material # 1
$m1 = $_POST["m1_3"];
$numM1 = $_POST["numM1_3"];
// Material # 2
$m2 = $_POST["m2_3"];
$numM2 = $_POST["numM2_3"];
// Material # 3
$m3 = $_POST["m3_3"];
$numM3 = $_POST["numM3_3"];
// Material # 4
$m4 = $_POST["m4_3"];
$numM4 = $_POST["numM4_3"];
// Material # 5
$m5 = $_POST["m5_3"];
$tipM5 = $_POST["tipM5_3"];
$numM5 = $_POST["numM5_3"];
// Material # 6
$m6 = $_POST["m6_3"];
$numM6 = $_POST["numM6_3"];
// Material # 7
$m7 = $_POST["m7_3"];
$tipM7 = $_POST["tipM7_3"];
$numM7 = $_POST["numM7_3"];
// Material # 8
$m8 = $_POST["m8_3"];
$tipM8 = $_POST["tipM8_3"];
$numM8 = $_POST["numM8_3"];

/* Datos del expositor */ 
$nombres = $_POST["nombres2"];
$apellidoP = $_POST["apellidoP2"];
$apellidoM = $_POST["apellidoM2"];
$curp = $_POST["curp2"];
$correo1 = $_POST["correo1_2"];
$correo2 = $_POST["correo2_2"];
$telefono = $_POST["telefono2"];
$celular = $_POST["celular2"];

/* Datos de la institucion o empresa */
$nombreInstitucion = $_POST["nombreInstitucion2"];
$plantel = $_POST["plantel2"];
$calle = $_POST["calle2"];
$numero = $_POST["numero2"];
$colonia = $_POST["colonia2"];
$codigoPostal = $_POST["codigoPostal2"];
$estadoCiudad = $_POST["estadoCiudad2"];
$pais = $_POST["pais2"];
$telefonoOrigen = $_POST["telefonoOrigen2"];
$telefonoExtension = $_POST["telefonoExtension2"];
$correoOrigen = $_POST["correoOrigen2"];

// 0 - Conexion a la base de datos
$conexionDB = mysqli_connect($nombreHost, $nombreUsuario, $pwd, $nombreBD) or die("¡ERROR! - NO SE PUDO CONECTAR AL SERVIDOR :(");

/* --- 1 --- Tabla: tipoevento */
//Preparar la instruccion para guardar nuevo registro para la tabla TipoEvento
$guardarTipoEvento = "INSERT INTO tipoevento (tipoEvento, descripcion) VALUES ('".$tipoEvento."','".$clasificacionEvento."')";

// Se guarda la informacion en la tabla TipoEvento
$sector1 = mysqli_query($conexionDB, $guardarTipoEvento) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 1)");

// Se obtiene el idTipoEvento de la tabla TipoEvento para el siguiente paso
$idTipoEvento = "SELECT idTipoEvento FROM tipoevento ORDER BY idTipoEvento DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idTipoEvento)) {
    $stmt->execute();
    $stmt->bind_result($idTipoEvento);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 2 --- Tabla: evento */
// Preparar la instruccion para guardar nuevo registro para la tabla evento
$guardarEvento = "INSERT INTO evento (titulo, descripcion, capacidadMaximaPersonas, idTipoEvento2) VALUES ('".$tituloEvento."','".$descripcionEvento."','".$cantidadPersonas."','".$idTipoEvento."')";

// Se guarda la informacion en la tabla evento
$sector2 = mysqli_query($conexionDB, $guardarEvento) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 2)");

// Se obtiene el idEvento de la tabla evento para el siguiente paso
$idEvento = "SELECT idEvento FROM evento ORDER BY idEvento DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idEvento)) {
    $stmt->execute();
    $stmt->bind_result($idEvento);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 3 --- Tabla: horarioevento*/
// Preparar la instruccion para guardar nuevo registro para la tabla horarioevento
$guardarHorarioEvento = "INSERT INTO horarioevento (fechaInicio, horaInicio, fechaFinal, horaFinal, duracion, idEvento3) VALUES ('".$inicioEventoF."','".$inicioEventoT."','".$finalEventoF."','".$finalEventoT."','".$duracionEvento."','".$idEvento."')";

// Se guarda la informacion en la tabla horarioevento
$sector3 = mysqli_query($conexionDB, $guardarHorarioEvento) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 3)");

/* SUSPENDIDO
// Se obtiene el idHorario de la tabla horarioevento para el siguiente paso
$idHorario = "SELECT idHorario FROM horarioevento ORDER BY idHorario DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idHorario)) {
    $stmt->execute();
    $stmt->bind_result($idHorario);
    while ($stmt->fetch()) {}
    $stmt->close();
}*/

/* --- 4 --- Tabla: tipoequipo y equiporequerido*/

if(strlen($m1) > 0){
    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m1."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM1."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_1 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 1)");
}

if(strlen($m2) > 0){
    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m2."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM2."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_2 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 2)");
}

if(strlen($m3) > 0){
    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m3."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM3."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_3 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 3)");
}

if(strlen($m4) > 0){
    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m4."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM4."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_4 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 4)");
}

if(strlen($m5) > 0){
    if(strcmp($tipM5, "dlp") == 0){
        // Se busca el idTipoEquipo del material solicitado
        $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m5."' and tipo = '".$tipM5."'";
    }

    if(strcmp($tipM5, "lcv") == 0){
        // Se busca el idTipoEquipo del material solicitado
        $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m5."' and tipo = '".$tipM5."'";
    }

    if(strcmp($tipM5, "led") == 0){
        // Se busca el idTipoEquipo del material solicitado
        $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m5."' and tipo = '".$tipM5."'";
    }

    // Se realiza la consulta para obtener el idTipoEquipo
    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM5."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_5 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 5)");
}

if(strlen($m6) > 0){
    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m6."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM6."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_6 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 6)");
}

if(strlen($m7) > 0){
    if(strcmp($tipM7, "altavoces activos") == 0){
        // Se busca el idTipoEquipo del material solicitado
        $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m7."' and tipo = '".$tipM7."'";
    }

    if(strcmp($tipM7, "altavoces bluetooth") == 0){
        // Se busca el idTipoEquipo del material solicitado
        $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m7."' and tipo = '".$tipM7."'";
    }

    // Se realiza la consulta para obtener el idTipoEquipo
    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM7."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_7 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 7)");
}

if(strlen($m8) > 0){
    // Preparar la instruccion para guardar nuevo registro para la tabla tipoequipo
    $guardarTipoEquipo = "INSERT INTO tipoequipo (equipo, tipo, CantidadExistente) VALUES ('".$m8."','".$tipM8."','".$numM8."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_81 = mysqli_query($conexionDB, $guardarTipoEquipo) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 8:1)");

    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo WHERE equipo = '".$m8."' and tipo = '".$tipM8."'";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('".$numM8."','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_8 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 8:2)");
}

if(strlen($m1) == 0 && strlen($m2) == 0 && strlen($m3) == 0 && strlen($m4) == 0 && strlen($m5) == 0 && strlen($m6) == 0 && strlen($m7) == 0 && strlen($m8) == 0){
    // Preparar la instruccion para guardar nuevo registro para la tabla tipoequipo
    $guardarTipoEquipo = "INSERT INTO tipoequipo (equipo, tipo, CantidadExistente) VALUES ('ninguno', '---------', '-----')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_83 = mysqli_query($conexionDB, $guardarTipoEquipo) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 8:3)");

    // Se busca el idTipoEquipo del material solicitado
    $idTipoEquipo = "SELECT idTipoEquipo FROM tipoequipo ORDER BY idTipoEquipo DESC LIMIT 1";

    if ($stmt = $conexionDB->prepare($idTipoEquipo)) {
        $stmt->execute();
        $stmt->bind_result($idTipoEquipo);
        while ($stmt->fetch()) {}
        $stmt->close();
    }

    // Preparar la instruccion para guardar nuevo registro para la tabla equiporequerido
    $guardarEquipoRequerido = "INSERT INTO equiporequerido (cantidad, idTipoEquipo1) VALUES ('-----','".$idTipoEquipo."')";

    // Se guarda la informacion en la tabla equiporequerido
    $sector4_8_4 = mysqli_query($conexionDB, $guardarEquipoRequerido) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 4 - 8:4)");
}

// Se obtiene el idHorario de la tabla equiporequerido para el siguiente paso
$idEquipoRequerido = "SELECT idEquipoRequerido FROM equiporequerido ORDER BY idEquipoRequerido DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idEquipoRequerido)) {
    $stmt->execute();
    $stmt->bind_result($idEquipoRequerido);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 5 --- Tabla: equiporeq0evento */
// Preparar la instruccion para guardar nuevo registro para la tabla equiporeq0evento
$guardarEquipoReq0Evento = "INSERT INTO equiporeq0evento (idEvento1, idEquipoRequerido1) VALUES ('".$idEvento."','".$idEquipoRequerido."')";

// Se guarda la informacion en la tabla equiporeq0evento
$sector5 = mysqli_query($conexionDB, $guardarEquipoReq0Evento) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 5)");

/* --- 6 --- Tabla: origen */
// Preparar la instruccion para guardar nuevo registro para la tabla origen
$guardarOrigen = "INSERT INTO origen (nombreInstitucion, telefono, extencion, correo) VALUES ('".$nombreInstitucion."','".$telefonoOrigen."','".$telefonoExtension."','".$correoOrigen."')";

// Se guarda la informacion en la tabla origen
$sector6 = mysqli_query($conexionDB, $guardarOrigen) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 6)");

$idOrigen = "SELECT idOrigen FROM origen ORDER BY idOrigen DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idOrigen)) {
    $stmt->execute();
    $stmt->bind_result($idOrigen);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 7 --- Tabla: direccion */
// Preparar la instruccion para guardar nuevo registro para la tabla direccion
$guardarDireccion = "INSERT INTO direccion (colonia, codigoPost, calle, numero, estadoCiudad, pais, plantel, idOrigen1) VALUES ('".$colonia."','".$codigoPostal."','".$calle."','".$numero."','".$estadoCiudad."','".$pais."','".$plantel."','".$idOrigen."')";

// Se guarda la informacion en la tabla direccion
$sector7 = mysqli_query($conexionDB, $guardarDireccion) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 7)");

/* --- 8 --- Tabla: tipoexpositor */
// Preparar la instruccion para guardar nuevo registro para la tabla tipoexpositor
$guardarTipoExpositor = "INSERT INTO tipoexpositor (tipoExpositor, descripcion) VALUES ('".$origen."','".$tipoEvento."')";

// Se guarda la informacion en la tabla tipoexpositor
$sector8 = mysqli_query($conexionDB, $guardarTipoExpositor) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 8)");

$idTipoExpositor = "SELECT idTipoExpositor FROM tipoexpositor ORDER BY idTipoExpositor DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idTipoExpositor)) {
    $stmt->execute();
    $stmt->bind_result($idTipoExpositor);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 9 --- Tabla: expositor */
// Preparar la instruccion para guardar nuevo registro para la tabla expositor
$guardarExpositor = "INSERT INTO expositor (nombres, apellidoPat, apellidoMat, curp, idOrigen2, idTipoExpositor1) VALUES ('".$nombres."','".$apellidoP."','".$apellidoM."','".$curp."','".$idOrigen."','".$idTipoExpositor."')";

// Se guarda la informacion en la tabla expositor
$sector9 = mysqli_query($conexionDB, $guardarExpositor) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 9)");

$idExpositor = "SELECT idExpositor FROM expositor ORDER BY idExpositor DESC LIMIT 1";

if ($stmt = $conexionDB->prepare($idExpositor)) {
    $stmt->execute();
    $stmt->bind_result($idExpositor);
    while ($stmt->fetch()) {}
    $stmt->close();
}

/* --- 10 --- Tabla: contacto */
// Preparar la instruccion para guardar nuevo registro para la tabla contacto
$guardarContacto = "INSERT INTO contacto (correo1, correo2, telefono, celular, idExpositor2) VALUES ('".$correo1."','".$correo2."','".$telefono."','".$celular."','".$idExpositor."')";

// Se guarda la informacion en la tabla contacto
$sector10 = mysqli_query($conexionDB, $guardarContacto) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 10)");

/* --- 10 --- Tabla: expositor0tipoeve */
// Preparar la instruccion para guardar nuevo registro para la tabla expositor0tipoeve
$guardarExpositor0TipoEve = "INSERT INTO expositor0tipoeve (idExpositor1, idTipoEvento1) VALUES ('".$idExpositor."','".$idTipoEvento."')";

// Se guarda la informacion en la tabla expositor0tipoeve
$sector10 = mysqli_query($conexionDB, $guardarExpositor0TipoEve) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 10)");

/* --- 11 --- Tabla: aprobacionevento */
// Preparar la instruccion para guardar nuevo registro para la tabla aprobacionevento
$guardarAprobacionEvento = "INSERT INTO aprobacionevento (estado, idEvento2) VALUES ('pendiente', '".$idEvento."')";

// Se guarda la informacion en la tabla aprobacionevento
$sector11 = mysqli_query($conexionDB, $guardarAprobacionEvento) or die ("ACABA DE SUCEDER UN ERROR AL MOMENTO DE REGISTRAR LA SOLICITUD (SECTOR 11)");
?>
<!DOCTYPE html> <!-- 10 Final -->
<html lang="en">
<head>
    <link rel="stylesheet" href="css/hojaEstilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculacion Eventos TESE</title>
</head>
<body id = "gen">
<center>
        <table width="1335px">
            <tr>
                <td id = "solicitud">
                    <h2><center>SOLICITUD</center></h2>
                </td>
            </tr>
        </table>
    </center>
    <h1><center>SOLICITUD REGISTRADA CON EXITO!!!</center></h1>
    <h2><center>El N° DE FOLIO ES: <?php echo $idEvento;?></center></h2>
    <h3><center>Por favor, toma nota de este folio y guárdalo en un lugar seguro.</center></h3>
</body>
</html>