<?php

$a = 1;
while ($a <= 10) {
    if ($a == 3) {
        $a++;
        continue;
    }
    echo $a . '<br>';
    $a++;
}
