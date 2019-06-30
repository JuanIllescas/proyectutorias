<?php
    session_start();

    require 'database.php';

    if(isset($_SESSION['id_alu'])){
        $records = $conn->prepare('SELECT * FROM alumno WHERE id_alu = :id_alu');
        $records->bindParam(':id_alu', $_SESSION['id_alu']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0){
            $user = $results;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require 'partials/header.php'
    ?>

    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
        <H2>no login</H2>
    <?php endif;?>
</body>
</html>