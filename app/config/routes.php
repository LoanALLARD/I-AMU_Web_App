<?php

use App\Core\Router;

// Initialisation du router
$router = new Router();

// Ajout des routes
$router->addRoute('/login', 'HomeController', 'index');
$router->addRoute('/register', 'RegisterController', 'index');

// Exécution
$router->run((string) $_SERVER['REQUEST_URI']);