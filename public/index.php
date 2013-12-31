<?php

require __DIR__.'/../vendor/autoload.php';

use App\Core\Config;
use App\Core\Router;

$config = new Config();
$config->load(__DIR__.'/../config/config.php');

$router = new Router();
$router->load(__DIR__.'/../app/routes.php');
$router->dispatch();