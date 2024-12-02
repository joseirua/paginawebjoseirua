<?php
$host = "localhost";  // El servidor
$user = "root";       // El usuario por defecto de MySQL en XAMPP
$pass = "";           // No tiene contraseña por defecto
$dbname = "usuarios_db";  // El nombre de la base de datos

// Conectar a la base de datos
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
