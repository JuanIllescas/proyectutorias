<?php
    //!empty($_POST[])
    require 'database.php';

    $message = '';

    if(!empty($_POST['tipo']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['pass']) && !empty($_POST['carrera'])){
        $sql= "INSERT INTO user (tipo, nombre, apellido, pass, carrera) VALUES (:tipo, :nombre, :apellido, :pass, :carrera )";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':tipo',$_POST['tipo']);
        $stmt->bindParam(':nombre',$_POST['nombre']);
        $stmt->bindParam(':apellido',$_POST['apellido']);
        $stmt->bindParam(':pass',$_POST['pass']);
        $stmt->bindParam(':carrera',$_POST['carrera']);

        if($stmt->execute()){
            $message = 'Successfully created new user';
        } else {
            $message = 'Failed created new user';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <?php
        require 'partials/head.php';
    ?>
</head>
<body>
    <?php 
        require 'partials/header.php';
    ?>
    <H2>REGISTRO TUTORIAS</H2>
    <img src="assets/img/e_prin.jpg" width="800">
    <br>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?> 

    <form action="signup.php" method="post">
        
        <p>Nombre</p>
        <input type="text" name="nombre" placeholder="Nombre">
        <p>Apellidos</p>
        <input type="text" name="apellido" placeholder="Apellido">
        <p>Ingresa tu Codigo (pass)</p>
        <input type="text" name="pass" placeholder="clave">
        <p>Ingresa Carrera (Carrera principal)</p>
        <input type="text" name="carrera" placeholder="Carrera">
        <br>
        <input type="submit" value="Aceptar" >
    </form>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>