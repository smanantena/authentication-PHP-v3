<?php

session_start();

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$routes = require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR .'routes.php';

if (array_key_exists($_SERVER['REQUEST_URI'], $routes['static'])) {
    require_once $routes['static'][$_SERVER['REQUEST_URI']];
} elseif (array_key_exists($_SERVER['REQUEST_URI'], $routes['dynamic'])) {
    require_once $routes['dynamic'][$_SERVER['REQUEST_URI']];
} elseif (array_key_exists($_SERVER['REQUEST_URI'], $routes['error'])) {
    require_once $routes['error'][$_SERVER['REQUEST_URI']];
} else {
    header('Location:/errors');
}
