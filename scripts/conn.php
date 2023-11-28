<?php

$hostname= 'localhost';
$username='root';
$password='';
$database='login_db';

$dsn= "mysql:host=$hostname;dbname=$database";

try {
    $conn= new PDO($dsn, $username, $password);
    echo "connected";
} catch (PDOException $e) {
    $e->getMessage();
}
?>