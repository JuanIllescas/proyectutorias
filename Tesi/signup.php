<?php
    //!empty($_POST[''])
    require 'database.php';

    $message='';

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['carrera']) && !empty($_POST['semestre']) && !empty($_POST['email']) && !empty($_POST['matricula']) && !empty($_POST['contraseña'])){
        $sql = "INSERT INTO alumno(nombre_a, apellido_a, id_carrera, semestre, email, matricula, contraseña) VALUES (:nombre, :apellido, :carrera, :semestre, :email, :matricula, :contraseña)";
        $stmt = $conn->prepare($sql);
        //$stmt->bindParam(':nombrehtml',$_POST[':nombrebd']);
        $stmt->bindParam(':nombre',$_POST['nombre_a']);
        $stmt->bindParam(':apellido',$_POST['apellido_a']);
        $stmt->bindParam(':carrera',$_POST['id_carrera']);
        $stmt->bindParam(':semestre',$_POST['semestre']);
        $stmt->bindParam(':email',$_POST['email']);
        $stmt->bindParam(':matricula',$_POST['matricula']);
        //$password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
        $stmt->bindParam(':contraseña',$_POST['contraseña']);

        if($stmt->execute()){
            $message = 'Successfully Create New User';
        } else {
            $message = 'Failed Create New User';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'partials/head.php';
    ?>
    <title>signup</title>
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
    <form class action="signup.php" method="post">
        <p>Ingresa tu nombre(s)</p>
        <input type="text" name="nombre" placeholder="Nombre">
        <p>Ingresa tus apellidos</p>
        <input type="text" name="apellido" placeholder="Apellidos">
        <p>Ingresa tu carrera</p>
        <input type="text" name="carrera" placeholder="Carrera">
        <p>Ingresa tu semestre</p>
        <input type="text" name="semestre" placeholder="Semestre">
        <p>Ingresa tu E-mail</p>
        <input type="text" name="email" placeholder="E-mail">
        <p>Ingresa tu matrícula</p>
        <input type="text" name="matricula" placeholder="Matricula">
        <p>Ingresa una contraseña</p>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <p>Confirme su contraseña</p>
        <input type="password" name="contraseña2" placeholder="Contraseña">
        <br>
        <input type="submit" value="Aceptar" >
    </form>
    <?php
        require 'partials/foter.php';
    ?>
</body>
</html>