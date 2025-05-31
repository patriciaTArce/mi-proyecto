<?php
session_start();

// Incluir archivo de conexión
require_once 'db.php';

// Verifica si se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validar existencia de los campos
    if (isset($_POST['email']) && isset($_POST['password'])) {

        // Limpiar los datos del formulario
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Buscar el usuario por email
        $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $query);

        // Verificar si el usuario existe
        if ($result && mysqli_num_rows($result) === 1) {
            $usuario = mysqli_fetch_assoc($result);

            // Verificar contraseña (sin hash por ahora)
            if ($usuario['password'] === $password) {
                // Guardar en sesión
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['rol'] = $usuario['rol'];

                // Redirigir según rol
                if ($usuario['rol'] === 'admin') {
                    header("Location: ../admin.html");
                } else {
                    header("Location: ../reserva.html");
                }
                exit();
            } else {
                echo "❌ Contraseña incorrecta.";
            }

        } else {
            echo "❌ Usuario no encontrado.";
        }

    } else {
        echo "❌ Faltan datos del formulario.";
    }

} else {
    echo "⛔ Acceso no permitido.";
}
?>





