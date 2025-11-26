<?php

class AuthController
{
    public function login()
    {
        echo dirname(__DIR__) . '/Views/auth/login.php';
        exit;
        require dirname(__DIR__) . '/Views/auth/login.php';
    }

    public function register()
    {
        require __DIR__ . '/../Views/auth/register.php';
    }
}
