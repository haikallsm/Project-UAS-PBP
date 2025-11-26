<?php

class Router {
    public static function route($url)
    {
        switch ($url) {
            case '':
            case '/':
                echo __DIR__ . '/../Views/auth/login.php';
                require __DIR__ . '/../Views/auth/login.php';
                break;

            case 'login':
                require __DIR__ . '/../Views/auth/login.php';
                break;

            default:
                require __DIR__ . '/../Views/errors/404.php';
                break;
        }
    }
}
