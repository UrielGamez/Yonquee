<?php
include 'conexionusuarios.php';

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito.<br>";
        echo "<a href='formulario.html'>Registrar otro usuario</a><br>";
        echo "<a href='listar.php'>Ver lista de usuarios</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
