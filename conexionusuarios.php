<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = ""; // por defecto vacío en XAMPP
$base_datos = "yonque1";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>