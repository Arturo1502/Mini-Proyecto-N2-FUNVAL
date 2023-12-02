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
    exit();
}
// Verificar si se estableció la variable de sesión de alerta
if (isset($_SESSION['mostrarAlerta'])) {
    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "¡Bienvenido!",
                    text: "Por favor, actualiza tu información.",
                    icon: "warning",
                    confirmButtonText: "Aceptar"
                }).then(() => {
                    window.location.href = "editProfile.php";
                });
            });
         </script>';

    // Después de mostrar la alerta, elimina la variable de sesión para que no se muestre nuevamente
    unset($_SESSION['mostrarAlerta']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal info</title>
    <link rel="shortcut icon" href="/assets/devchallenges.png">
    <!-- CSS -->

    <link rel="stylesheet" href="/styles/stylePersonalInfo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Scripts -->
    <script src="/scripts/main.js" defer></script>
    <script src="https://kit.fontawesome.com/e40dfd2f11.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
            <h1>Personal Info</h1>
            <h2>Basic info, like your name and photo</h2>
        </div>

        <div class="container">
            <!-- <div class="contenido"> -->
            <div class="encabezado">
                <div class="encabezadoLeft">
                    <h1>Profile</h1>
                    <h2>Some info may be visible to other people</h2>
                </div>

                <div class="encabezadoRigth">
                    <button class="edit" onclick="location.href='./editProfile.php'"><a href="./editProfile.php">Edit</a></button>
                </div>

            </div>
            <hr>
            <div class="primerArea">
                <div class="izquierda">
                    <h3>PHOTO</h3>
                </div>
                <div class="derecha">
                    <?php if ($datoUsuario['photo'] != '') : ?>
                        <img src="./uploads/<?= $imgName ?>" alt="">
                    <?php endif ?>
                </div>
            </div>
            <hr>

            <div class="areas">
                <div class="izquierda">
                    <h3>NAME</h3>
                </div>
                <div class="derecha">
                    <p><?php echo ($datoUsuario['name']) ?></p>
                </div>
            </div>
            <hr>
            <div class="areas">
                <div class="izquierda">
                    <h3>BIO</h3>
                </div>
                <div class="derecha">
                    <p><?php echo ($datoUsuario['bio']) ?></p>
                </div>
            </div>
            <hr>
            <div class="areas">
                <div class="izquierda">
                    <h3>PHONE</h3>
                </div>
                <div class="derecha">
                    <p><?php echo ($datoUsuario['phone']) ?></p>
                </div>
            </div>
            <hr>
            <div class="areas">
                <div class="izquierda">
                    <h3>EMAIL</h3>
                </div>
                <div class="derecha">
                    <p><?php echo ($datoUsuario['email']) ?></p>
                </div>
            </div>
            <hr>

            <div class="areaUltima">
                <div class="izquierda">
                    <h3>PASSWORD</h3>
                </div>
                <div class="derecha">
                    <p>**********</p>

                </div>
            </div>

            <!-- </div> -->






        </div>
</body>

</html>