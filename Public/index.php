<?php

require_once __DIR__ . '/../vendor/autoload.php';


use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    return "Nam Nguyen";
});

$app->router->get('/', [SiteController::class, 'index']);


$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'login']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
