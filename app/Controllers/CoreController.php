<?php

namespace Pokedex\Controllers;

class CoreController
{
    /**
     * Displays our views
     *
     * @param string $viewName
     * @param array $viewDatas
     * @return void
     */
    protected function show(string $viewName, array $viewDatas = [])
    {
        // $router global to use it for generate links in views (with $router->generate)
        global $router;
        extract($viewDatas);

        require_once __DIR__ . '/../Views/partials/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/partials/footer.tpl.php';
    }

}