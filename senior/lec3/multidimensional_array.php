<?php

$user = [
    'name' => 'ziad',
    'email' => 'ziad@gmail.com',
    'password' => 'Ziad123',
    'skills' => ['PHP', 'OOP', 'Laravel']
];

foreach ($user as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo $v . '<br>';
        }
    } else {
        echo $value . '<br>';
    }
}
