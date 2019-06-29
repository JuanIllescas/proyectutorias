<?php
    //!empty($_POST[])
    require 'database.php';

    $message = '';

    if(!empty($_POST['nombre_u']) && !empty($_POST['apellidos_a']) && !empty($_POST['años']) && !empty($_POST['id_carrera']) && !empty($_POST['semestre'])&&!empty($_POST['email'])&&!empty($_POST['matricula'])&&!empty($_POST['contraseña'])){
        $sql= "INSERT INTO alumno (nombre_u, apellidos_a, años, pass, id_carrera, semestre, email, matricula, contraseña) VALUES (:tipo, :nombre, :apellido, :pass, :carrera )";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':nombre_u',$_POST['nomre_u']);
        $stmt->bindParam(':apellidos_a',$_POST['nombre']);
        $stmt->bindParam(':años',$_POST['apellido']);
        $stmt->bindParam(':id_carrera',$_POST['pass']);
        $stmt->bindParam(':semestre',$_POST['carrera']);
        $stmt->bindParam(':email',$_POST['carrera']);
        $stmt->bindParam(':matricula',$_POST['carrera']);
        $stmt->bindParam(':contraseña',$_POST['carrera']);

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
    <img src="assets/img/e_prin.jpg" width="600">
    <br>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?> 

    <form action="signup.php" method="post">
        
        <p>Ingresa tu nombre(s)</p>
        <input type="text" name="nombre" placeholder="Nombre">
        <p>Ingresa tus apellidos</p>
        <input type="text" name="apellido" placeholder="Apellidos">
        <p>Ingresa tu edad</p>
        <input type="text" name="edad" placeholder="Edad">
        <p>Ingresa tu carrera</p>
        <input type="text" name="carrera" placeholder="Carrera">
        <p>Ingresa tu semestre</p>
        <input type="text" name="semestre" placeholder="Semestre">
        <p>Ingresa tu E-mail</p>
        <input type="text" name="e-mail" placeholder="E-mail">
        <p>Ingresa tu matrícula</p>
        <input type="text" name="matricula" placeholder="Matricula">
        <p>Ingresa una contraseña</p>
        <input type="text" name="contraseña" placeholder="Contraseña">
        <p>Confirme su contraseña</p>
        <input type="text" name="contraseña" placeholder="Contraseña">
        <br>
        <input type="submit" value="Aceptar" >
    </form>
    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>