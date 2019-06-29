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
    <img src="assets/img/salon_4.jpg" width="600">
    <br>
    <a href="consultaExp.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ficha de identificacion del tutor</a>
    <a href="consultaExp" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Salir</a>
    
    <br>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>