<?php

$day = 3;
$r = match ($day) {
    1 => 'saturday',
    2 => 'sunday',
    3, 4, 5, 6, 7 => 'day off',
    default => 'this is not the day'
};
echo $r;
