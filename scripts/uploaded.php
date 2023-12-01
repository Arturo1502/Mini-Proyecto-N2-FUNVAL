<?php
require_once('./conn.php');

session_start();
$user_Id = $_SESSION['datoUsuario']['id'];;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tmp = ($_FILES['photo']['tmp_name']);
    $baseName = basename($_FILES['photo']['name']);
    $extension = pathinfo($tmp, PATHINFO_EXTENSION); //para obtener la extensión del archivo
    $baseUrl = '../uploads/';



    move_uploaded_file($tmp, $baseUrl . $baseName);
}

$query = 'UPDATE `usuarios` SET photo=? WHERE id=?';

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute([$baseName, $user_Id]);

    $sql = "SELECT * FROM usuarios WHERE `id` =?";
    $stm = $pdo->prepare($sql);
    $stm->execute([$user_Id]);

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    

    $_SESSION['datoUsuario'] = $result;

    header('location: ../personalInfo.php'); 


    

} catch (PDOException $e) {
    echo $e->getMessage();
}
