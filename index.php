<?php
session_start();

require_once 'controllers/user.controller.php';
require_once 'controllers/home.controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    '/' => function () {

        if (isset($_SESSION['user'])) {
            $controller = new HomeController();
            $controller->showHome();

        } else {
            $controller = new UserController();
            $controller->showLoginForm();
        }
        exit;
    },

    '/login' => function () {
    $controller = new UserController();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->login(); 
    } else {
        $controller->showLoginForm(); 
    }
},

 '/register' => function () {
    $controller = new UserController();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->register();
    } else {
        $controller->showRegisterForm();
    }
},

    '/home' => function () {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        $controller = new HomeController();
        $controller->showHome();
    },

    '/logout' => function () {
        session_destroy();
        header('Location: /login');
        exit;
    },
];


if (isset($routes[$uri])) {
    $routes[$uri]();
} else {
    http_response_code(404);
    echo "404 - Page not found";
}
