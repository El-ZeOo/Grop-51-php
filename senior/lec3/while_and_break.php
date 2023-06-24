<?php

$a = 1;
while (true) {
    while ($a <= 10) {
        echo $a . '<br>';
        $a++;
        break 2;
    }
}
