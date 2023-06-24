<?php
if (isset($_POST['username'])) {
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
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="password">
        <input type="color" name="color">
        <input type="date" name="date">

        <input type="radio" name="gender" value="male" id="" checked>male
        <input type="radio" name="gender" value="female" id="">female

        <input type="checkbox" name="course[]" value="html" id="">HTML
        <input type="checkbox" name="course[]" value="css" id="">CSS
        <input type="checkbox" name="course[]" value="js" id="">JS

        <select name="cars[]" id="" multiple>
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
            <option value="d">d</option>
            <option value="e">e</option>
            <option value="f">f</option>
            <option value="g">g</option>
        </select>

        <input type="submit" value="Send">
    </form>
</body>

</html>