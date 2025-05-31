<?php
include 'db.php';

$sql = "SELECT * FROM espacios WHERE disponible = 1";
$result = $conn->query($sql);

$datos = [];

while ($row = $result->fetch_assoc()) {
    $datos[] = $row;
}

echo json_encode($datos);
?>
