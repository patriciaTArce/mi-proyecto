<?php
include 'db.php';

$sql = "SELECT espacios.nombre, COUNT(reservas.id) AS total_reservas 
        FROM espacios 
        LEFT JOIN reservas ON espacios.id = reservas.espacio_id 
        GROUP BY espacios.id";

$result = $conn->query($sql);
$datos = [];

while ($row = $result->fetch_assoc()) {
    $datos[] = $row;
}

echo json_encode($datos);
?>
