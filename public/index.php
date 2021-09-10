<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
$router->addRoutes([
    [
        'GET',
        '/',
        [
            'controller' => '\\Pokedex\\Controllers\\MainController',
            'method' => 'home'
        ],
        'main-home'
    ],
    [
        'GET',
        '/details/[i:id]',
        [
            'controller' => '\\Pokedex\\Controllers\\MainController',
            'method' => 'details'
        ],
        'main-details'
    ]
]);
$routeInformations = $router->match();

if (!$routeInformations) {
    http_response_code(404);
    exit('Cette page n\'existe pas !');
}

$controllerName = $routeInformations['target']['controller'];
$methodName = $routeInformations['target']['method'];

$controller = new $controllerName();
$controller->$methodName($routeInformations['params']);
