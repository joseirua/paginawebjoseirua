<?php
$host = "jose.irua.awebpages.com"; // Cambiar a tu servidor si usas AwardSpace
$usuario = "jose";   // Cambiar al usuario de AwardSpace
$contraseña = "beso123";    // Cambiar a la contraseña de AwardSpace
$base_datos = "cultura_geek";

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
