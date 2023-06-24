<?php


function test()
{
    echo 'Ziad';
}
test();

echo '<br>';
function test2()
{
    return 'Ziad';
}
echo test();
echo '<br>';
function test3(): void
{
    echo 'ziad';
}
echo test3();
echo '<br>';
function test4(): array|false
{
    return false;
}
var_dump(test4());
echo '<br>';
function test5(): ?string
{
    return null;
}
var_dump(test5());
echo '<br>';
function test6(int | float $x, int | float $y): int
{
    return $x + $y;
}
echo test6(5.5, 5.6);
echo '<br>';
function devision_even_number($num1, $num2)
{
    if ($num1 % 2 == 0) {
        $result =  $num1 / $num2;
    }
    return $result;
}
echo devision_even_number(100, 2);

echo '<br>';

function test7($firstName, $middleName, $lastName)
{
    return "$firstName $middleName $lastName";
}
echo test7(firstName: 'ziad', lastName: 'salama', middleName: 'farg');

echo '<br>';
function test8($firstName, $middleName, $lastName)
{
    return "$firstName $middleName $lastName";
}
$arr = ['lastName' => 'salama', 'firstName' => 'ziad', 'middleName' => 'farg'];

echo test7(...$arr);

echo '<br>';

$a = 5;
function test9()
{
    global $a;
    return $a;
}
echo test9();

echo '<br>';

$a = 10;
function test10()
{
    return $GLOBALS['a'];
}
echo test10();
echo '<br>';

// anonymous funciton normal
$test11 = function ($a) {
    return $a;
};
echo $test11('ziad');
echo '<br>';

// anonymous function by global scope
$a = 'ziad';
$test12 = function () use ($a) {
    return $a;
};
echo $test12($a);
echo '<br>';

// anonymous function by reference
$a = 100;
$test13 = function () use (&$a) {
    return $a;
};
$a = 10;
echo $test13($a);

// callable function
$arr = [1, 2, 3, 4, 5];
$result = array_map(function ($ele) {
    return $ele * 2;
}, $arr);
echo '<pre>';
print_r($result);
echo '</pre>';

// callable function by using arrow function
$arr = [1, 2, 3, 4, 5];
$result = array_map(fn ($ele) => $ele * 3, $arr);
echo '<pre>';
print_r($result);
echo '</pre>';

// current data and output unix timestamp
$currentTime = time();
echo $currentTime;

echo '<br>';

// current date and time after 1 week
$timeStamp = time() + (3 * 7 * 24 * 60 * 60);
echo date('Y-m-d h:i a', $timeStamp);

echo '<br>';

// time zone
echo date_default_timezone_get();

echo '<br>';

// set time zone 
date_default_timezone_set('Africa/Cairo');
echo date_default_timezone_get();

// this is function for using to pre array
function make_pre_array($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

// for chunck array two element in each array
$arr1 = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  1,
    'secondNum' => 2,
    'lastNum' => 3
];
echo make_pre_array(array_chunk($arr1, 2));


// for chunck array two element in each array
$arr1 = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  'one',
    'secondNum' => 'two',
    'lastNum' => 'three'
];
$arr2 = [
    'firstName' => 'ali',
    'secondName' => 'nasser',
    'thirdName' => 'medhat',
    'lastName' => 'ngm',
    'firstNum' => 11,
    'secondNum' => 12,
    'lastNum' => 13
];
echo make_pre_array(array_combine($arr1, $arr2));

// this is function for filter array the number more than 50
$arr = [10, 20, 30, 40, 100, 150, 300];
echo make_pre_array(array_filter($arr, fn ($ele) => $ele > 50));

// for output the diff of indexed array
$arr1 = [
    'ziad',
    'farg',
    'mohmoud',
    'salama',
    'one',
    'two',
    'three'
];
$arr2 = [
    'ali',
    'nasser',
    'medhat',
    'ngm',
    11,
    12,
    'three'
];
echo make_pre_array(array_diff($arr1, $arr2));

// for output the diff of assoc array
$arr1 = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  'one',
    'secondNum' => 'two',
    'lastNum' => 'three'
];
$arr2 = [
    'firstName' => 'ali',
    'secondName' => 'nasser',
    'thirdName' => 'medhat',
    'lastName' => 'ngm',
    'firstNum' => 11,
    'secondNum' => 12,
    'lastNum' => 'three'
];
echo make_pre_array(array_diff_assoc($arr1, $arr2));


// that's return array values
$arr = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  'one',
    'secondNum' => 'two',
    'lastNum' => 'three'
];

echo make_pre_array(array_values($arr1));

// that's return array keys
$arr = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  'one',
    'secondNum' => 'two',
    'lastNum' => 'three'
];

echo make_pre_array(array_keys($arr1));


// returned mergin array
$arr1 = [
    'firstName' => 'ziad',
    'secondName' => 'farg',
    'thirdName' => 'mohmoud',
    'lastName' => 'salama',
    'firstNum' =>  'one',
    'secondNum' => 'two',
    'lastNum' => 'three',
    'name' => 'medht'
];
$arr2 = [
    'firstName' => 'ali',
    'secondName' => 'nasser',
    'thirdName' => 'medhat',
    'lastName' => 'ngm',
    'firstNum' => 11,
    'secondNum' => 12,
    'lastNum' => 'three'
];
echo make_pre_array(array_merge($arr1, $arr2));


// that's check if the value exists in array
$arr1 = [
    'ziad',
    'farg',
    'mohmoud',
    'salama',
    'one',
    'two',
    'three'
];
if (in_array('ziad', $arr1)) {
    echo 'true';
} else {
    echo 'false';
}

// this for list value to varaible
$arr = ['ziad', 'farg', 'mohmoud', 'salama', 'one', 'two', 'three'];
$list = list($firstName, $secondName, $thirdName, $lastName) = $arr;
echo "My First Name : $firstName And My Second Name : $secondName";
