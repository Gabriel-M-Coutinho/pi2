<?php
session_start();

require_once 'controllers/user.controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    '/' => function () {
        require_once 'views/home.php';
        exit;
    },

    '/about' => function () {
        require_once 'views/about.php';
        exit;
    },

    '/devs' => function () {
        require_once 'views/devs.php';
        exit;
    },

    '/support' => function () {
        require_once 'views/support.php';
        exit;
    },

    '/payment' => function () {
        require_once 'views/payment.php';
        exit;
    },

    '/reset' => function () {
        require_once 'views/reset.php';
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
