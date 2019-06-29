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
    <H2>REPORTES DE TUTORIAS</H2>
    <img src="assets/img/salon_4.jpg" width="600">
    <br>
    <a href="consultaExp.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Reporte Mensual</a>
    <a href="consultaExp.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Reporte Semestral</a>
    <a href="consultaExp.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Concentrado General</a>
    <a href="consultaExp.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Menu</a>
    
    <br>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>