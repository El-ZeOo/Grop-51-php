<?php

// call the index file
require_once 'ziad.php';

echo 'My Name Is ' . $name;
echo '<br>';
print('Hallow World');
echo '<br>';
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource
$array = ['ziad', 'farg', 'mahmoud', 'salama'];
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br>';
$string = "I Love PHP";
var_dump($string);
echo '<br>';
$inegerNumber = 23;
var_dump($inegerNumber);
echo '<br>';
$floatNumber = 1.5;
var_dump($floatNumber);
echo '<br>';
$boolean = true;
var_dump($boolean);
echo '<br>';
$empty = null;
var_dump($empty);
echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<body>

</body>

</html>