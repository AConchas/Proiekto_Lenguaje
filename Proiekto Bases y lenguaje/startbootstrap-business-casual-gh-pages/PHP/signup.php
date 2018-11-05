<?php

  require 'database.php';

  $message = '';
  $texto = 'Sartu parametro guztiak!!';
  $texto2 = 'Ezin izan da kontua sortu, ikusi parametro guztiak ondo daudela!!';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if ($_POST['password'] == $_POST['confirm_password']){
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      echo "<span style=\"color: #FF0000\">$texto2</span>";
    }
  } else { echo "<span style=\"color: #FF0000\">$texto2</span>"; }
}
  if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) { echo "<span style=\"color: #FF0000\">$texto</span>";}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="fondo-pan">

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your username">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
