<?php

namespace Pokedex\Controllers;

use Type;
use Pokemon;

class MainController extends CoreController {

    /**
     * Home page
     *
     * @return void
     */
    public function homeAction() {

        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

        $this->show('home',[
            'pokemons' => $pokemons
        ]);
    }

    /**
     * Details page
     *
     * @param [type] $id
     * @return void
     */
    public function detailsAction($id) {

        $pokemonModel = new Pokemon();
        $typeModel = new Type();
        
        $pokemon = $pokemonModel->find($id);
        $types = $typeModel->findTypesByPokemon($id);

        $this->show('details',[
            'pokemon' => $pokemon,
            'types' => $types
        ]);
    }

    /**
     * Types page
     *
     * @return void
     */
    public function typesAction() {

        $typeModel = new Type();
        
        $types = $typeModel->findAll();

        $this->show('types',[
            'types' => $types
        ]);
    }

    /**
     * Sorted by type page
     *
     * @param [type] $id
     * @return void
     */
    public function typeAction($id) {

        $pokemonModel = new Pokemon();
        
        $pokemons = $pokemonModel->findPokemonsbyType($id);
        $this->show('type',[
            'pokemons' => $pokemons
        ]);
    }
}