<?php


$routes = [
    '/login' => function() {
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        $controller->showLoginForm(); 
    },

    '/register' => function() {
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        $controller->showRegisterForm();
    }
];
