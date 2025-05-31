<?php
$idReserva = $_POST['id'];
$conn = new mysqli("localhost", "root", "", "coworking");
$conn->query("UPDATE reservas SET pagado = 1 WHERE id = $idReserva");
echo "Pago simulado exitosamente.";
?>
