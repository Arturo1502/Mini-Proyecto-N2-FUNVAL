<?php
require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se proporciona un token y las contraseñas
    if (isset($_POST['token']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $token = $_POST['token'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];

        // Verificar que las contraseñas coincidan
        if ($newPassword === $confirmPassword) {
            // Verificar si el token existe en la base de datos y no ha expirado
            $query = "SELECT * FROM usuarios WHERE reset_token = ? AND reset_token_expiry > NOW()";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$token]);

            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Actualizar la contraseña y borrar el token de restablecimiento
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE usuarios SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?";
                $updateStmt = $pdo->prepare($updateQuery);
                $updateStmt->execute([$hashedPassword, $token]);

                header('location: ../resetSuccess.php');
                exit();
            } else {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  Swal.fire("Token invalido o expirado", "El token expiró intentelo nuevamente", "error")';
                echo '    .then(() => window.location.href = "../forgotpass.php");';
                echo '});';
                echo '</script>';
                exit();
            }
        } else {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '  Swal.fire("Contraseña no coincide", "Las contraseñas ingresadas no coinciden", "error")';
            echo '    .then(() => window.location.href = "../forgotpass.php");';
            echo '});';
            echo '</script>';
            exit();
        }
    } else {
        echo "Datos incompletos.";
        exit();
    }
} else {
    echo "Acceso no autorizado.";
    exit();
}
