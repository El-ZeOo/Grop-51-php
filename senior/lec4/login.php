<?php
require_once 'data.php';



if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $flag = 0;

  foreach ($users as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
      $flag = 1;
      break;
    }
  }
  if ($flag == 1) {
    header('location: index.php');
  } else {
    echo 'sorry';
  }
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
  <form action="" method="post">
    <label for="">username</label>
    <input type="text" name="username">
    <label for="">email</label>
    <input type="email" name="email">
    <label for="">password</label>
    <input type="password" name="password">
    <input type="submit" value="Login">
  </form>
</body>

</html>