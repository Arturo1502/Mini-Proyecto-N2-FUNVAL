<?php
session_start();
if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];
    if (isset($datoUsuario['photo']) && ($datoUsuario['photo']) != '') {
        $imgName = $datoUsuario['photo'];
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
    <title>Edit Perfil</title>
    <link rel="shortcut icon" href="/assets/devchallenges.png">
    <!-- CSS -->

    <link rel="stylesheet" href="/styles/styleEditProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Scripts -->
    <script src="/scripts/main.js" defer></script>
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
                                <a href="#"><i class="fa-solid fa-circle-user" style="color: #4f4e4e;"></i>My profile</a>
                                <a href="#"><i class="fa-solid fa-user-group" style="color: #4f4e4e;"></i>Group chat</a>
                                <hr>
                                <a class="logout" href="./scripts/logout.php"><span class="material-symbols-outlined">exit_to_app</span>Logout</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="all">

        <div class="title">
            <a href="./personalInfo.php"><i class="fa-solid fa-angle-left"></i> Back </a>
        </div>

        <div class="container">


            <div class="encabezado">
                <h1>Change Info</h1>
                <h2>Changes will be reflected to every services</h2>
            </div>



            <div class="primerArea">
                <div class="izquierda1">
                    <?php if ($datoUsuario['photo'] != '') : ?>
                        <img src="./uploads/<?= $imgName ?>" alt="">
                    <?php endif ?>
                    <a href="./uploadPhoto.php"><i class="fa-solid fa-camera"></i></a>
                </div>
                <div class="derecha1">
                    <a href="./uploadPhoto.php">CHANGE PHOTO</a>
                </div>
            </div>

            <div class="editForm">
                <form action="" method="post">

                    <div class="area">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name...">

                    </div>

                    <div class="bioArea">
                        <label for="bio">Bio</label>
                        <input type="text" name="bio" id="bio" placeholder="Enter your bio...">
                    </div>

                    <div class="area">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone...">
                    </div>

                    <div class="area">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email...">
                    </div>

                    <div class="area">
                        <label for="pass">Bio</label>
                        <input type="password" name="pass" id="pass" placeholder="Enter your pass...">
                    </div>

                    <button class="btn" type="submit">Save</button>

                </form>

            </div>

        </div>
        <div class="credits">
            <p>Created by </p>
            <a href="https://www.linkedin.com/in/arturo-octavio-alvarez-zapata-b152571a3/" target="_blank">
                <NAME>ArturoA
            </a>
        </div>








    </div>
</body>
</body>

</html>