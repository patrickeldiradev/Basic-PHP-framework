<?php

use \App\Controllers\HomeController;
use \App\Core\Request;

return [
    [
        'http_method' => Request::GET,
        'url' => '/',
        'controllerName' => HomeController::class,
        'methodName' => 'index',
    ],
    [
        'http_method' => Request::GET,
        'url' => '/update',
        'controllerName' => HomeController::class,
        'methodName' => 'update',
    ]
];