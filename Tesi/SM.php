<?php
    require 'database.php';

    session_start();

    if (isset($_SESSION['id_alu'])) {
        header('Location: /WEB_TUTORIAS');
    }
    
    

    if(!empty($email) && !empty($pass)){
        $sql = "SELECT id_alu, email, pass FROM alumno WHERE email = :email";
        $records = $conn->prepare($sql);
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if(count($results) > 0 && password_verify($_POST['pass'], $results['pass'])){
            $_SESSION['id_alu'] = $results['id_alu'];
            header('Location: /WEB_TUTORIAS');
        } else {
            $message = 'Datos Invalidos';
        }
    }
?>