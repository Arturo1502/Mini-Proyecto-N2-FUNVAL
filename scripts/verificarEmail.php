<?php
require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Verificar si el correo existe en la base de datos
    $query = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);

    if (!$stmt->execute()) {
        // Manejo de error
        showSweetAlertError("Error al buscar el correo electrónico", "../forgotpass.php");
    }

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        // El correo electrónico no está registrado
        showSweetAlertError("Correo electrónico no registrado", "../forgotpass.php");
    }
}

if ($user) {
    // Generar y almacenar un código único en la base de datos (token)
    $resetToken = bin2hex(random_bytes(32));
    $expiryTime = date('Y-m-d H:i:s', strtotime('+5 minutes')); // Expira en 5 minutos
    $query = "UPDATE usuarios SET `reset_token` = ?, `reset_token_expiry` = ? WHERE email = ?";
    $stmt = $pdo->prepare($query);

    if (!$stmt->execute([$resetToken, $expiryTime, $email])) {
        // Manejo de error
        showSweetAlertError("Error al actualizar el token", "../forgotpass.php");
    }

    // Redirigir a la página de restablecimiento de contraseña con el token
    header("Location: ./resetPassword.php?token=" . urlencode($resetToken));
    exit();
}

function showSweetAlertError($message, $redirectLocation) {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '  Swal.fire("Error", "' . $message . '", "error")';
    echo '    .then(() => window.location.href = "' . $redirectLocation . '");';
    echo '});';
    echo '</script>';
    exit();
}
?>