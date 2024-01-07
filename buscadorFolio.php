<?php
$nombreHost = 'localhost';
$nombreUsuario = 'root';
$pwd = '';
$nombreBD = 'VinculacionProyecto';
$folio = $_POST["folio"];
$msj = "";

// 0 - Conexion a la base de datos
$conexionDB = mysqli_connect($nombreHost, $nombreUsuario, $pwd, $nombreBD) or die("¡ERROR! - NO SE PUDO CONECTAR AL SERVIDOR :(");

$estado = "SELECT estado FROM aprobacionevento WHERE idEvento2 = '".$folio."'";

if ($stmt = $conexionDB->prepare($estado)) {
    $stmt->execute();
    $stmt->bind_result($estado);
    while ($stmt->fetch()) {}
    $stmt->close();
}

if(strcmp($estado, "aceptado") == 0){
    $msj ="LA SOLICITUD FUE ACEPTADA.";
}
else{
    if(strcmp($estado, "rechazado") == 0){
        $msj = "LA SOLICITUD FUE RECHAZADA.";
    }
    else{
        if(strcmp($estado, "pendiente") == 0){
            $msj = "LA SOLICITUD ESTA EN PROCEDO DE REVISIÓN.";
        }
        else{
            $msj = "EL FOLIO NO EXISTE.";
        }
    }
}
echo <<< EOT
    
EOT;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/hojaEstilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTOS VINCULACIÓN - RESULTADO</title>
</head>
<body id = "gen">
    <?php
    echo <<< EOT
    <h7><b>$msj</b></h7>
    EOT;
    ?>
    <table>
        <tr>
            <td>
            <form>
                <button type = "submit" formaction ="javascript: history.go(-1)" id = "boton"><span>INTENTAR DE NUEVO</span></button>
            </form>
            </td>
        </tr>
    </table>
</body>
</html>