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
    <link rel="stylesheet" href="./styles/styleIndex.css">
    <title>REGISTER</title>
    <link rel="shortcut icon" href="/assets/devchallenges.png">
</head>

<body>
    <div class="all">
        <div class="container">
            <div class="content">
                <div class="logo">
                    <img src="./assets/devchallenges.svg" alt="devchallenge icon">
                </div>

                <div class="subtitle">
                    <h2>Join thousand of learners from around the world</h2>
                </div>

                <div class="parrafo">
                    <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
                </div>

                <form action="/scripts/userRegistered.php" method="post">
                    <input class="placeholderEmail" type="text" name="email" id="email" placeholder="Email" required>

                    <input class="placeholderPass" type="password" name="password" id="password" placeholder="Password" required>

                    <button class="submitRegister" type="submit">Start coding now</button>
                </form>

            </div>
            <p class="conectWith">or continue with these social profile</p>
            <div class="redesSociales">
                <a href="https://www.google.com/" target="_blank"><img src="/assets/Google.svg" alt="logo de google"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="/assets/Facebook.svg" alt="logo de facebook"></a>
                <a href="https://www.twitter.com/" target="_blank"><img src="/assets/Twitter.svg" alt="logo de twitter"></a>
                <a href="https://www.github.com/" target="_blank"><img src="/assets/Gihub.svg" alt="logo de github"></a>
            </div>
            <div class="login">
                <p>Already member?</p>
                <a class="linkLogin" href="./login.php">Login</a>
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

</html>