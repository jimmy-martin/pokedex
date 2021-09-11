<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
$router->addRoutes([
    [
        'GET',
        '/',
        [
            'controller' => 'MainController',
            'method' => 'home'
        ],
        'main-home'
    ],
    [
        'GET',
        '/details/[i:id]',
        [
            'controller' => 'MainController',
            'method' => 'details'
        ],
        'main-details'
    ],
    [
        'GET',
        '/types',
        [
            'controller' => 'ListController',
            'method' => 'types'
        ],
        'list-types'
    ],
    [
        'GET',
        '/types/[i:id]',
        [
            'controller' => 'TypeController',
            'method' => 'type'
        ],
        'list-type'
    ]
]);
$routeInformations = $router->match();

if (!$routeInformations) {
    http_response_code(404);
    exit('Cette page n\'existe pas !');
}

$controllerName = '\\Pokedex\\Controllers\\' . $routeInformations['target']['controller'];
$methodName = $routeInformations['target']['method'];

$controller = new $controllerName();
$controller->$methodName($routeInformations['params']);
