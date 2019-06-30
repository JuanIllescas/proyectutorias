
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'partials/head.php';
    ?>
    <title>ASSESORIAS</title>
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
        <H2>TUTORIAS TESI</H2>
        <img src="assets/img/e_prin.jpg" width="800">
        <br>
        <a href="signup.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registro</a>
        <a href="login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inicio</a>
        <br>
        <img src="assets/img/l_logo_g" width="200">
    <?php endif;?>
</body>
</html>