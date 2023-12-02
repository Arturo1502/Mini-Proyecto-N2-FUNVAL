<?php
require_once('./conn.php');

// Verificar si el token está presente en la URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar si el token existe en la base de datos y no ha expirado
    $query = "SELECT * FROM usuarios WHERE reset_token = ? AND reset_token_expiry > NOW()";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$token]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
?>
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
                            <h2>Reset Password</h2>
                            <form action="./cambiarContrasena.php" method="post">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">

                                <label for="new_password">New Password:</label>
                                <input class="placeholderPass" type="password" name="new_password" id="new_password" placeholder="Write your new password">


                                <label for="confirm_password">Confirm Password:</label>
                                <input class="placeholderPass" type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your new password">


                                <button type="submitRegister" type="submit">Reset Password</button>
                            </form>
                        </div>
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
<?php
        exit();
    } else {
        // Token inválido o expirado
        echo "Invalid or expired token.";
        exit();
    }
} else {
    // El token no está presente en la URL
    echo "Token not provided.";
    exit();
}
?>