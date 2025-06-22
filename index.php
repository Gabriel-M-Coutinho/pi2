<?php
session_start();

require_once 'controllers/user.controller.php';
require_once 'controllers/search_advanced.controller.php'; 

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [

    '/' => function () {
        require_once 'views/home.php';
        exit;
    },

    '/search_simple' => function () {
        require_once 'views/search_simple.php';
        exit;
    },

    '/search_advanced' => function() {
    $controller = new SearchAdvancedController();
    

    $cnaes = $controller->cnaes();
    $municipios = $controller->municipios();
    

    $results = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $results = $controller->searchDataBase();
    }

    require_once 'views/search_advanced.php';
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
        exit;
    },

    '/login' => function () {
        $controller = new UserController();
        $controller->login(); 
    },

    '/register' => function () {
        $controller = new UserController();
        $controller->register();
    },

    '/logout' => function () {
        $_SESSION = array();
        session_destroy();
        header('Location: /login');
        exit;
    },

    '/user' => function () {
        $controller = new UserController();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') 
        {
            $controller->update();
        }
        else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete')
        {
            $controller->delete();
        }
        else
        {
            require_once 'views/user.php';
        }
        exit;
    },

];

if (isset($routes[$uri])) {
    $routes[$uri]();
} else {
    http_response_code(404);
    echo "404 - Page not found";
}
