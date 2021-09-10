<?php

namespace Pokedex\Controllers;

class MainController
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
        extract($viewDatas);

        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }

    /**
     * Show home views
     */
    public function home()
    {
        $this->show('home');
    }
}
