<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

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
        // $router global to use it for generate links in views (with $router->generate)
        global $router;
        extract($viewDatas);

        require_once __DIR__ . '/../Views/partials/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/partials/footer.tpl.php';
    }

    /**
     * Show home view
     */
    public function home()
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

        dump($pokemons);

        $this->show('home', [
            'pokemons' => $pokemons,
        ]);
    }

    /**
     * Show details view
     */
    public function details($params)
    {
        $pokemonModel = new Pokemon();
        $pokemon = $pokemonModel->find($params['id']);

        $this->show('details', [
            'pokemon' => $pokemon,
        ]);
    }
}
