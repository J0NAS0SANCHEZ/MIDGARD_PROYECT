<?php
$config = require_once __DIR__ . '/../config.php';
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_seleccionado = $_POST["tipo"];
    $estado_selecciodado = $_POST["estado"];

    // Insertar la selección del usuario en la base de datos
    $sql = "INSERT INTO propiedades (tipo, estado) VALUES ('$tipo_seleccionado', '$estado_selecciodado' )";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error al insertar registro: " . $conexion->error;
    }
}


$conexion->close();
?>
