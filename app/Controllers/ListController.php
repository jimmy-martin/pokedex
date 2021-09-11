<?php

namespace Pokedex\Controllers;

class ListController extends CoreController
{
    /**
     * Show home view
     */
    public function types()
    {
        $this->show('types');
    }

    /**
     * Show details view
     */
    public function type($params)
    {
        $this->show('type');
    }
}