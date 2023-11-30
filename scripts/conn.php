<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'login_db';

$dsn = "mysql:host=$hostname;dbname=$database";

try {
    $pdo = new PDO($dsn, $username, $password);
    // echo "Connected";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die(); // Detener la ejecución del script después de manejar la excepción
}
?>
