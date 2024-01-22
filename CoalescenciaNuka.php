<?php

$user = [
    'name' => 'Mateus',
    'age' => 22,
    'profissional' => 'Back-end'
];

echo isset($user['front-end']) ? $user['front-end'] : 'Ele é Back-end, a parte boa'.PHP_EOL;
echo $user['profissional']; // Isso imprimirá 'Back-end'

