<?php
$servidor = "localhost"; 
$usuario = "root";
$contrasena = "";
$basededatos = "educativos";

date_default_timezone_set("America/Argentina/Buenos_Aires");

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);


if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
