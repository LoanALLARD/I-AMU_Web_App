<?php
// Initialisation de la session pour la gestion de la langue
session_start();
if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = 'fr'; // langue par défaut
}

// Chargement de l'autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Chargement des routes
require_once __DIR__ . '/../app/config/routes.php';