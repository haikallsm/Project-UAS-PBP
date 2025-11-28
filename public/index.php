<?php

$_ENV['APP_ENV'] = 'development';

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\LetterController;
use App\Controllers\AuthController;

session_start();

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [AuthController::class, 'showLogin']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);
$router->get('/register', [AuthController::class, 'showRegister']);
$router->post('/register', [AuthController::class, 'register']);

$router->get('/letters', [LetterController::class, 'index']);
$router->get('/letters/create', [LetterController::class, 'create']);
$router->post('/letters/store', [LetterController::class, 'store']);
$router->get('/letters/view', [LetterController::class, 'view']);

$router->resolve();
