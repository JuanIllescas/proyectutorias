<?php
    session_start();
    require 'database.php';

    if(!empty($_POST['nombre']) && !empty($_POST['pass'])){
    $records = $conn->prepare('SELECT id, nombre, pass FROM users WHERE nombre=:nombre ');
    $records->binParam(':nombre', $_POST['nombre']);
    $records->execute();
    $result = $records->fetch(PDO::FETCH_ASSOC);

    $message='';

    if(count($result) >0 && password_verify($_POST['pass'], $result['pass'] )){
        $_SESSION['id_'] = $result['id'];
        header('Location: /TESI');
    } else {
        $message = 'error';
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php
        require 'partials/head.php';
    ?>
</head>
<body>
<?php 
        require 'partials/header.php';
    ?>
    <H2>AUTENTIFICACION</H2>
    <img src="assets/img/e_pATIO.jpg" width="800">
    <br>

    <?php if(!empty($message)): ?>
        <?= $message ?>
    <?php endif; ?>

    <form action="login.php" method="post">
        <input type="text" name="nombre" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" value="Docente">
        <input type="submit" value="Alumno">
    </form>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>