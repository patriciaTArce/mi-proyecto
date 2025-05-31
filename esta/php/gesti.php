<?php
include 'db.php';

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO espacios (nombre, tipo, disponible) VALUES ('$nombre', '$tipo', 1)";

if ($conn->query($sql) === TRUE) {
    echo "Espacio creado correctamente.";
} else {
    echo "Error: " . $conn->error;
}
?>
