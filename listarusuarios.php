<?php
include 'conexionusuarios.php';

$sql = "SELECT id, nombre, correo FROM usuarios";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Correo: " . $fila["correo"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
