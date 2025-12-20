<?php
// 1. On affiche les erreurs pour voir le coupable
ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

// 2. Chemin vers Laravel
$laravel = __DIR__ . '/../public/index.php';

if (!file_exists($laravel)) {
    die("Erreur : Le dossier 'public' ou le fichier 'index.php' est introuvable sur le serveur.");
}

// 3. On lance Laravel
require $laravel;
