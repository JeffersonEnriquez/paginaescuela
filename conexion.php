<?php 
// conexion.php
$host = "localhost:3307";
$usuario = "root";
$contrasena = "";
$bd = "escuela24dejulio";

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>