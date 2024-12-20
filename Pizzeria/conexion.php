<?php
$host = "localhost"; // Cambia si es necesario
$user = "root";      // Usuario de MySQL
$pass = "";          // Contraseña de MySQL
$dbname = "reservas"; // Nombre de tu base de datos

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
