<?php
// this example for marg two array by (+)
$arr1 = ['ziad', 'farg', 'mahmoud', 'salama'];
$arr2 = ['ali', 'ahmed', 'amr', 'nasser', 'medht'];
var_dump($arr1 + $arr2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = 'ziad';
    if ($name == 'ali') : ?>
        <h1 style="background-color: red; color: white;">Hallow Ali</h1>
    <?php elseif ($name == 'ahmed') : ?>
        <h1 style="background-color: green; color: white;">Hallow Ahmed</h1>
    <?php else : ?>
        <h1 style="background-color: blue; color: white;">Hallow Ziad</h1>
    <?php
    endif;
    ?>
</body>

</html>