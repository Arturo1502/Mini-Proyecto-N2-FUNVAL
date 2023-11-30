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
    <nav class="topnav" id="myTopnav">
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
                        <button class="dropbtn" onclick="toggleDropdown()"><i class="fa fa-caret-down"></i></button>
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
        </div>


        </ul>
        </div>


    </nav>
</body>

</html>