<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;

class ListController extends CoreController
{
    /**
     * Show home view
     */
    public function types()
    {
        $typeModel = new Type();
        $types = $typeModel->findAll();

        $this->show('types', [
            'types' => $types
        ]);
    }

    /**
     * Show details view
     */
    public function type($params)
    {  
        $typeModel = new Type();
        $type = $typeModel->find($params['id']);
        $pokemons = $type->getPokemons();

        $this->show('type', [
            'pokemons' => $pokemons,
            'type' => $type
        ]);
    }
}