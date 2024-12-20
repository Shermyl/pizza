<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "reservas");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si los campos existen en $_POST
if (
    isset($_POST['nombre']) && isset($_POST['telefono']) &&
    isset($_POST['personas']) && isset($_POST['fecha']) &&
    isset($_POST['hora']) && isset($_POST['mensaje'])
) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $personas = $_POST['personas'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $mensaje = $_POST['mensaje'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO reservas (nombre, telefono, personas, fecha, hora, mensaje) 
            VALUES ('$nombre', '$telefono', '$personas', '$fecha', '$hora', '$mensaje')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "¡Reserva guardada con éxito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "Error: Faltan campos en el formulario.";
}

// Cerrar la conexión
$conexion->close();
?>

