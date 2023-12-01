<?php
session_start();
if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];
} else{
    echo "No dato";
    header('location: ./login.php');
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
                    <img src="/assets/Google.svg" alt="o">
                </li>

                <li class="nombreUser">
                    Nombre
                </li>
                <li class="dropdown">
                    <div class="contenidoDropDown">
                        <button class="dropbtn" onclick="toggleDropdown()"><i id="flecha" class="fa fa-caret-down" ></i></button>
                        <div class="dropdown-content" id="dropdown-content">
                            <div class="contenidoDrop">
                                <a href="#"><i class="fa-solid fa-circle-user" style="color: #4f4e4e;"></i>My profile</a>
                                <a href="#"><i class="fa-solid fa-user-group" style="color: #4f4e4e;"></i>Group chat</a>
                                <div>_____________________</div>
                                <a class="logout" href="#"><span class="material-symbols-outlined">exit_to_app</span>Logout</a>
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
            <div class="contenido">
                <div class="encabezado">
                    <div class="encabezadoLeft">
                        <h1>Profile</h1>
                        <h2>Some info may be visible to other people</h2>
                    </div>

                    <div class="encabezadoRigth">
                        <button class="edit"><a href="">Edit</a></button>
                    </div>
                </div>

                <div class="primerArea">
                    <div class="izquierda">
                        <h3>PHOTO</h3>
                    </div>
                    <div class="derecha">
                        <img src="./assets/Google.svg" alt="">
                    </div>
                </div>


                <div class="areas">
                    <div class="izquierda">
                        <h3>NAME</h3>
                    </div>
                    <div class="derecha">
                        <p>Nombre</p>
                    </div>
                </div>

                <div class="areas">
                    <div class="izquierda">
                        <h3>BIO</h3>
                    </div>
                    <div class="derecha">
                        <p>lorem</p>
                    </div>
                </div>

                <div class="areas">
                    <div class="izquierda">
                        <h3>PHONE</h3>
                    </div>
                    <div class="derecha">
                        <p>9595959595</p>
                    </div>
                </div>

                <div class="areas">
                    <div class="izquierda">
                        <h3>EMAIL</h3>
                    </div>
                    <div class="derecha">
                        <p>admin@admin.com</p>
                    </div>
                </div>


                <div class="areaUltima">
                    <div class="izquierda">
                        <h3>PASSWORD</h3>
                    </div>
                    <div class="derecha">
                        <p>151515</p>
                    </div>
                </div>

            </div>






        </div>
</body>

</html>



<!-- <div class="content">
    <div class="encabezado">
        <h1>Profile</h1>
        <h2>Some info may be visible to other people</h2>
    </div>

    <div class="subtitle">
        <h2>Login</h2>
    </div>
    <form action="./personalInfo.php" method="post">
        <input class="placeholderEmail" type="text" name="email" id="email" placeholder="Email">

        <input class="placeholderPass" type="password" name="password" id="password" placeholder="Password">

        <button class="submitRegister" type="submit">Login</button>
    </form>


</div>
<a class="forgotPass" href="">Forgot password?</a>
<p class="conectWith">or continue with these social profile</p>
<div class="redesSociales">
    <buttom><img src="/assets/Google.svg" alt="logo de google"></buttom>
    <buttom><img src="/assets/Facebook.svg" alt="logo de facebook"></buttom>
    <buttom><img src="/assets/Twitter.svg" alt="logo de twitter"></buttom>
    <buttom><img src="/assets/Gihub.svg" alt="logo de github"></buttom>
</div>
<div class="login">
    <p>Already member?</p>
    <a class="linkLogin" href="/index.php">Register</a>
</div>

</div>
<div class="credits">
    <p>Created by </p>
    <a href="https://www.linkedin.com/in/juan-perez-97727b170/" target="_blank">
        <NAME>ArturoA
    </a>
</div> -->