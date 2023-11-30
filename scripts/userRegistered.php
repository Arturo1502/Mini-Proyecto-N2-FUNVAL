<?php
require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $stmt = $pdo->prepare("INSERT INTO usuarios (`email`, `password`) VALUES (?, ?)");
    $stmt->execute([$email, $password]);

    header('location:./personalInfo.php');
}
?>
