<?php
// Inclusion de la Database
require __DIR__.'/../app/utils/Database.php';

// Inclusion des dependances composer
require __DIR__.'/../vendor/autoload.php';

// Inclusion des Controllers
require __DIR__.'/../app/Controllers/CoreController.php';
require __DIR__.'/../app/Controllers/MainController.php';

// Inclusion des Models
require __DIR__.'/../app/Models/Pokemon.php';
require __DIR__.'/../app/Models/Type.php';

$app = new \Pokedex\Application();

$app->run();

