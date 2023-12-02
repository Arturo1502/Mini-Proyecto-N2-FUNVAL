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
        echo "Error al buscar el correo electrónico";
        exit();
    }

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($user) {
    // Generar y almacenar un código único en la base de datos (token)
    $resetToken = bin2hex(random_bytes(32));
    $query = "UPDATE usuarios SET `reset_token` = ?, `reset_token_expiry` = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?";
    $stmt = $pdo->prepare($query);

    if (!$stmt->execute([$resetToken, $email])) {
        // Manejo de error
        echo "Error al actualizar el token";
        exit();
    }

    
    // Redirigir a la página de restablecimiento de contraseña con el token
    header("Location: ./resetPassword.php?token=" . urlencode($resetToken));
    exit();
}

?>