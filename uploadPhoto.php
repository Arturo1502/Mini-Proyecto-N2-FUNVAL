<?php
session_start();
if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];
    if (isset($datoUsuario['photo']) && ($datoUsuario['photo']) != '') {
        $imgName = $datoUsuario['photo'];
        // var_dump($datoUsuario);
    }

    // print_r($datoUsuario);
} else {
    // echo "No dato";
    header('location: ./login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
    <link rel="shortcut icon" href="/assets/devchallenges.png">

    <!-- css -->
    <link rel="stylesheet" href="../styles/styleUploadPhoto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- scripts -->
    <script src="./JS/main.js" defer></script>
    <script src="https://kit.fontawesome.com/e40dfd2f11.js" crossorigin="anonymous"></script>



</head>

<body>
<nav class="topnav responsive" id="myTopnav">
        <div class="iconoNavbar">
            <img src="/assets/devchallenges.svg" alt="icono de Devchallenge">
        </div>

        <div class="namePhoto">
            <ul class="nameNavbar">
                <li class="photouser">
                    <?php if ($datoUsuario['photo'] != '') : ?>
                        <img src="./uploads/<?= $imgName ?>" alt="">
                    <?php endif ?>
                </li>

                <li class="nombreUser">
                    <?php echo ($datoUsuario['name']) ?>
                </li>
                <li class="dropdown">
                    <div class="contenidoDropDown">
                        <button class="dropbtn" onclick="toggleDropdown()"><i id="flecha" class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content" id="dropdown-content">
                            <div class="contenidoDrop">
                                <a href="/personalInfo.php" class="fa-solid fa-circle-user" style="color: #4f4e4e;"></i><p>My profile</p></a>
                                <a href="#"><i class="fa-solid fa-user-group" style="color: #4f4e4e;"></i><p>Group chat</p></a>
                                <hr>
                                <a class="logout" href="./scripts/logout.php"><span class="material-symbols-outlined">exit_to_app</span>Logout</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <form action="./scripts/uploaded.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo" accept="image/*" required>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>