<?php

namespace Pokedex;

use AltoRouter;
use Dispatcher;

class Application
{
    private $router;

    public function __construct()
    {
        $this->router = new AltoRouter();

        
        $this->setBasePath();
        $this->defineRoute();
    }

    public function run()
    {
        // On récupere la route
        $match = $this->router->match();

        $dispatcher = new Dispatcher($match, '\Pokedex\Controllers\ErrorController::err404');

        $dispatcher->dispatch();
        
    }

    private function defineRoute()
    {
        // Route Home Page
        $this->router->map('GET', '/', '\Pokedex\Controllers\MainController::homeAction', 'home');
        // Route Details
        $this->router->map('GET', '/details/[i:id]', '\Pokedex\Controllers\MainController::detailsAction', 'details');
        // Route Types
        $this->router->map('GET', '/types', '\Pokedex\Controllers\MainController::typesAction', 'types');
        // Route Pokemons by Type
        $this->router->map('GET', '/type/[i:id]', '\Pokedex\Controllers\MainController::typeAction', 'type');

    }

    private function setBasePath()
    {
        //Definition du chemin de base de toutes les urls
        if(isset($_SERVER['BASE_URI']))
        {
            $this->router->setBasePath($_SERVER['BASE_URI']);
        }
    }
}
