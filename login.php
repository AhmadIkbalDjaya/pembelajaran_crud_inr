<?php
session_start();
if (isset($_SESSION["login"])){
  header("location: index.php");
}
require "function.php";
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = mysqli_query($conn, "SELECT * FROM `user` WHERE username='$username' AND password='$password'");
  if (mysqli_num_rows($query) > 0) {
    $_SESSION["login"] = true;
    header("location: index.php");
    exit;
  }
  $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Login</h3>
  <?php if (isset($error)) : ?>
    <p style="color: red;">Username / password salah</p>
  <?php endif; ?>
  <form action="" method="post">
    <label for="username">Username</label>
    <div>
      <input type="text" name="username" id="username">
    </div>
    <label for="password">password</label>
    <div>
      <input type="password" name="password" id="password">
    </div>
    <button type="submit" name="login">Login</button>
  </form>
</body>

</html>