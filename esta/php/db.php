<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "coworking"; // o el nombre real de tu base

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>


