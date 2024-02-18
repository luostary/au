<?php

$params = [
    'adminEmail' => 'guapac@yandex.ru',
    'senderEmail' => 'guapac@yandex.ru',
    'senderName' => 'Autohub',
    'enableTaxiModule' => false,
    'pathToTaxiBot' => ''
];

if (file_exists(__DIR__ . '/private/params-local.php')) {
    $params = require __DIR__ . '/private/params-local.php';
}

return $params;
