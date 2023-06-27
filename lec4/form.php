<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
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
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="color">Color</label>
            <input type="color" name="color" id="color">
        </p>
        <p>
            <label for="date">Birth Day</label>
            <input type="date" name="date" id="date">
        </p>
        <p>
            <label for="tack">Track</label>
            <select name="track[]" id="track">
                <option value="back-end">Back-End</option>
                <option value="front-end">Front-End</option>
                <option value="full-stack">Full-Stack</option>
            </select>
        </p>
        <p>
            <label for="gender">gender</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">female</label>
        </p>
        <p>
            <input type="checkbox" name="lang[]" id="html" value="html">
            <label for="html">HTML</label>
            <input type="checkbox" name="lang[]" id="css" value="css">
            <label for="css">CSS</label>
            <input type="checkbox" name="lang[]" id="js" value="js">
            <label for="js">JS</label>
        </p>
        <p>
        <p><label for="describe">Describe</label></p>
        <textarea name="describe" id="" cols="30" rows="10"></textarea>
        </p>
        <input type="submit" value="Sent">
    </form>
</body>

</html>