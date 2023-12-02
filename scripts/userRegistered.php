<?php
require_once('./conn.php');
session_start();
$_SESSION['mostrarAlerta'] = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $email = $_POST['email'];
    
    $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (`email`, `password`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email, $passwordhash]);
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `usuarios` WHERE email = ?";

    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $result['name'];
        if ($result) {
            if (password_verify($password, $result['password'])) {
                session_start();
                $_SESSION['datoUsuario'] = $result;
                
                header('Location: ../personalInfo.php');
            } else {
                echo 'Password incorrecto';
            }
        } else{
            echo 'Usuario no registrado';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
