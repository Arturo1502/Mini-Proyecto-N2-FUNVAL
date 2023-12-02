<?php
session_start();
if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];

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


</head>

<body>
    <form action="./scripts/uploadedFromProfile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo" accept="image/*" required>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>