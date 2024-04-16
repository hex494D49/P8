<?php

require_once('Models/User.php');
require_once('Models/Order.php');

$models = [
    User::class,
    Order::class,
];

$modelMetadata = [];

foreach ($models as $modelClass) {
    $modelMetadata[] = [
        'name' => $modelClass,
        'metadata' => $modelClass::metadata(),
    ];
}

$jsonMetadata = json_encode($modelMetadata, JSON_PRETTY_PRINT);

print_r($jsonMetadata);

