<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdn de los iconos  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&display=swap" rel="stylesheet">


    <!-- styles -->
    <link rel="stylesheet" href="/styles/stylelogin.css">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/devchallenges.png">
</head>

<body>
    <div class="all">
        <div class="title">
            <a href="./personalInfo.php"><i class="fa-solid fa-angle-left"></i> Back </a>
        </div>
        <div class="container">
            <div class="content">
                <div class="logo">
                    <img src="/assets/devchallenges.svg" alt="devchallenge icon">
                </div>

                <div class="subtitle">
                    <h2>Find your account</h2>
                    <p>Please enter your email to search for your account.</p>
                </div>
                <form action="./scripts/verificarEmail.php" method="post">
                    <input class="placeholderEmail" type="text" name="email" id="email" placeholder="Email">

                    <button class="submitRegister" type="submit">Search</button>
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