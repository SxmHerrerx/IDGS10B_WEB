<!DOCTYPE html>
<html lang="es" ng-app="Futurite">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Structured data -->
    <?php include_once('src/partial/seo/structured-data.php'); ?>

    <!-- Googlebot -->
    <?php include_once('src/partial/seo/googlebot.php'); ?>

    <!-- Facebook Pixel Code -->
    <?php include_once('src/partial/seo/fb-pixel.php'); ?>

    <!-- Title -->
    <title>

    </title>
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Bootstrap -->
    <link href="patterns/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/glide.core.min.css">
    <link rel="stylesheet" href="assets/css/glide.theme.min.css">
    <!-- CSS -->

    <link href="patterns/main.css" rel="stylesheet" />
    <!-- Analytics code -->
    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>

<body>

<div id="pageContent" class="main-wrapper">    
    <div class="container gracias">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <img src="assets/img/.png" class="logo" alt=" - Logotipo">
                <h5 class="mt-5">
                    ¡Muchas <span>gracias</span> por contactarnos!
                </h5>
                <p class="mt-4 mb-4">
                    Recibimos tus datos, en breve <br>
                    un asesor se comunicará contigo.
                </p>
                <a class="btn-cta" href="index.php">IR A INICIO</a>
            </div>
        </div>
    </div>
</div>

</body>
  <script src="assets/js/jquery-3.6.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/contacto.js"></script>
  <script src="assets/js/glide.min.js"></script>
</html>
