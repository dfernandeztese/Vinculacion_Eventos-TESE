<?php
$nombreHost = 'localhost';
$nombreUsuario = 'root';
$pwd = '';
$nombreBD = 'VinculacionProyecto';

$conexionBD = mysqli_connect($nombreHost, $nombreUsuario, $pwd, $nombreBD) or die("ERROR!!!! No Se Pudo Conectar Al Servidor :(");
$guardarEvento = "INSERT INTO evento (titulo, descripcion) VALUES ('".$_POST["nombreTitulo"]."','".$_POST["descripcion"]."')";
$tmp1 = mysqli_query($conexionBD, $guardarEvento) or die ("ERROR !!! No Se Pudo Tener Conexion Con La BD :( [1]");

?>