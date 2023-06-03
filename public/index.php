<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));

// $router = new Router();

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');

$app->run();