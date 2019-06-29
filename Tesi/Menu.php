<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
    <?php
        require 'partials/head.php';
    ?>
</head>
<body>
    <?php 
        require 'partials/header.php';
    ?>
    <H2>MENU</H2>
    <img src="assets/img/e_prin.jpg" width="600">
    <br>
    <a href="Menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Identificacion del tutor</a>
    <a href="Menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Informacion</a>
    <a href="Menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Chat</a>
    <a href="Menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Reportes</a>
    <a href="Menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Salir</a>
    <br>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>