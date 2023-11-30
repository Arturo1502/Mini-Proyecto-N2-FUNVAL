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
        <div class="container">
            <div class="content">
                <div class="logo">
                    <img src="/assets/devchallenges.svg" alt="devchallenge icon">
                </div>

                <div class="subtitle">
                    <h2>Login</h2>
                </div>
                <form action="/scripts/personalInfo.php" method="post">
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
        </div>
    </div>

</body>

</html>