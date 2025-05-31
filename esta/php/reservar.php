<?php
include 'db.php';

$usuario_id = $_POST['usuario_id'];
$espacio_id = $_POST['espacio_id'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$sql = "INSERT INTO reservas (usuario_id, espacio_id, fecha, hora) VALUES ('$usuario_id', '$espacio_id', '$fecha', '$hora')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada";
} else {
    echo "Error: " . $conn->error;
}
?>
