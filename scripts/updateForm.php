<?php
require_once('./conn.php');

session_start();
$user_Id = $_SESSION['datoUsuario']['id'];;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];

    $query = 'UPDATE `usuarios` SET `email`=?, `password`=?, `name`=?, `bio`=?, `phone`=? WHERE `id`=?';



    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $password, $name, $bio, $phone, $user_Id]);

        $sql = "SELECT * FROM usuarios WHERE `id` =?";
        $stm = $pdo->prepare($sql);
        $stm->execute([$user_Id]);


        $result = $stm->fetch(PDO::FETCH_ASSOC);

        var_dump($result);
        $_SESSION['datoUsuario'] = $result;



        header('location:../personalInfo.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
