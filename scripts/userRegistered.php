<?php
require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $query = "INSERT INTO usuarios (`email`, `password`) VALUES (?, ?)";
    

    try {
        //code...
    } catch (\Throwable $th) {
        //throw $th;
    }
    header('location:../personalInfo.php');
}
?>
