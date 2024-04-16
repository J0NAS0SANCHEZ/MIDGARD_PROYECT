<?php
// Establecer conexión con la base de datos
$config = require_once __DIR__ . '../../config.php';
//Archivo de configuración para evitar la filtración de información

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$aPaterno = $_POST['aPaterno'];
$aMaterno = $_POST['aMaterno'];
$correo = $_POST['correo'];
//$contraseña = $_POST['contraseña']; // Contraseña en texto plano

// Encriptar la contraseña
//$contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];

// Preparar la consulta SQL para insertar los datos en la tabla Usuarios
$sql = "INSERT INTO Usuario (Nombre, aPaterno, aMaterno, Correo, Contraseña, Telefono, FchNacimiento) VALUES ('$nombre', '$aPaterno', '$aMaterno', '$correo', '$contraseña', '$telefono', '$fechaNacimiento')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar conexión
$conn->close();
