<?php

    if (isset($_SESSION['id_alu'])) {
        header('Location: /WEB_TUTORIAS/menu_a.php');
    }
    if (isset($_SESSION['id_pro'])) {
        header('Location: /WEB_TUTORIAS/menu_p.php');
    }

    require 'database.php';
    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $results_a = '0';
        $message = '';

        $sql_a = "SELECT id_alu, email, pass FROM alumno WHERE email = :email";
        $records_a = $conn->prepare($sql_a);
        $records_a->bindParam(':email', $_POST['email']);
        $records_a->execute();
        $results_a = $records_a->fetch(PDO::FETCH_ASSOC);
        $t_records_a = $records_a->rowcount();
        
        
        if($t_records_a > 0 && password_verify($_POST['pass'], $results_a['pass'])){
            session_start();
            $_SESSION['id_alu'] = $results_a['id_alu'];
            header('Location: /WEB_TUTORIAS/menu_a.php');
        }
        
        $sql_p = "SELECT * FROM profesor WHERE email = :email AND pass = :pass";
        $records_p = $conn->prepare($sql_p);
        $records_p->bindParam(':email', $_POST['email']);
        $records_p->bindParam(':pass', $_POST['pass']);
        $records_p->execute();
        $results_p = $records_p->fetch(PDO::FETCH_ASSOC);
        $t_records_p = $records_p->rowcount();
        
        if($t_records_p > 0 ){
            session_start();
            $_SESSION['id_pro'] = $results_p['id_pro'];
            header('Location: /WEB_TUTORIAS/menu_p.php');
        }
        
        else {
            $message = 'Datos Invalidos';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'partials/head.php';
    ?>
    <title>login</title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>
    <H2>INICIO TUTORIAS</H2>
    <img src="assets/img/e_prin.jpg" width="800">
    <br>

    <?php if(!empty($message)):?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="ingresa">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" value="Iniciar">
    </form>
    <?PHP
        require 'partials/foter.php';
    ?>
</body>
</html>