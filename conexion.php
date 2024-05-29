<?php
$servidor = "localhost"; // Cambia esto si tu base de datos está en un servidor remoto
$usuario = "root";
$contrasena = "";
$basededatos = "escuela";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);


if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
