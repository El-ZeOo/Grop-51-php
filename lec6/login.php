<?php
session_start();
$user = [
    ['username' => 'ziad', 'password' => 123],
    ['username' => 'ali', 'password' => 456],
    ['username' => 'taha', 'password' => 789],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach ($user as $key => $value) {
        if ($value['username'] == $username && $value['password'] == $password) {
            $_SESSION['username'] = $username;
            header("location: Medilab/index.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>