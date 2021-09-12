<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    /**
     * Show home view
     */
    public function home()
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

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
        $pokemons = $pokemon->getTypes();

        $this->show('details', [
            'pokemon' => $pokemon,
            'pokemons' => $pokemons
        ]);
    }
}
