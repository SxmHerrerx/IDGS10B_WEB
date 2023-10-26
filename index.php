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
    ForteOrigen LP
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
  
  <?php include_once('patterns/header/header.php'); ?>
  <?php include_once('patterns/sec1/sec1.php'); ?>
  <?php include_once('patterns/sec2/sec2.php'); ?>
  <?php include_once('patterns/sec3/sec3.php'); ?>
  <?php include_once('patterns/sec4/sec4.php'); ?>
  <?php include_once('patterns/sec5/sec5.php'); ?>
  <?php include_once('patterns/footer/footer.php'); ?>

</body>
  <script src="assets/js/jquery-3.6.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/contacto.js"></script>
  <script src="assets/js/glide.min.js"></script>
</html>
